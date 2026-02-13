<?php

namespace App\Console\Commands;

use App\Models\Freelancer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanupDuplicateFreelancers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'freelancer:cleanup-duplicates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cari dan bersihkan data freelancer dengan nomor telepon duplikat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🔍 Mencari data duplikat...');

        // Cari nomor telepon yang duplikat
        $duplicates = DB::table('freelancers')
            ->select('telepon', DB::raw('COUNT(*) as count'))
            ->groupBy('telepon')
            ->having('count', '>', 1)
            ->get();

        if ($duplicates->isEmpty()) {
            $this->info('✅ Tidak ada data duplikat ditemukan!');
            return;
        }

        $this->warn('📊 Ditemukan ' . $duplicates->count() . ' nomor telepon dengan duplikat:');
        $this->newLine();

        $totalDuplicates = 0;
        $totalToDelete = 0;

        foreach ($duplicates as $duplicate) {
            $this->line("   • {$duplicate->telepon}: {$duplicate->count}x");

            // Ambil semua data dengan nomor telepon ini
            $freelancers = Freelancer::where('telepon', $duplicate->telepon)
                ->orderBy('created_at', 'asc')
                ->get();

            // Tampilkan data
            foreach ($freelancers as $index => $f) {
                $prefix = $index === 0 ? '   ✓ (DIPERTAHANKAN)' : '   ✗ (AKAN DIHAPUS)';
                $this->line("     {$prefix} ID: {$f->id} - {$f->nama} - {$f->created_at}");
            }

            $totalDuplicates += $duplicate->count;
            $totalToDelete += ($duplicate->count - 1);
            $this->newLine();
        }

        $this->warn("Total: {$totalDuplicates} data duplikat, {$totalToDelete} akan dihapus");

        if ($this->confirm('Apakah Anda ingin melanjutkan penghapusan data duplikat?')) {
            $this->info('🗑️  Menghapus data duplikat...');

            $deleted = 0;
            foreach ($duplicates as $duplicate) {
                // Ambil data pertama (paling lama) untuk dipertahankan
                $firstRecord = Freelancer::where('telepon', $duplicate->telepon)
                    ->orderBy('created_at', 'asc')
                    ->first();

                if ($firstRecord) {
                    // Hapus semua data dengan telepon sama kecuali yang pertama
                    $deletedCount = Freelancer::where('telepon', $duplicate->telepon)
                        ->where('id', '!=', $firstRecord->id)
                        ->delete();

                    $deleted += $deletedCount;
                }
            }

            $this->info("✅ Berhasil menghapus {$deleted} data duplikat!");
            $this->info('🎉 Sekarang Anda bisa menjalankan migration: php artisan migrate');
        } else {
            $this->info('❌ Dibatalkan. Tidak ada data yang dihapus.');
        }
    }
}
