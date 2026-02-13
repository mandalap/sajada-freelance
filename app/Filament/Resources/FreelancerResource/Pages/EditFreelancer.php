<?php

namespace App\Filament\Resources\FreelancerResource\Pages;

use App\Filament\Resources\FreelancerResource;
use App\Models\Freelancer;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreelancer extends EditRecord
{
    protected static string $resource = FreelancerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('test_wa')
                ->label('Test WhatsApp')
                ->icon('heroicon-o-device-phone-mobile')
                ->color('success')
                ->url(fn (): string => $this->formatWhatsAppNumber($this->record->telepon))
                ->openUrlInNewTab(),
            Actions\DeleteAction::make(),
        ];
    }

    /**
     * Format nomor telepon ke format WhatsApp
     */
    private function formatWhatsAppNumber(string $phone): string
    {
        // Hapus semua karakter kecuali angka
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Jika dimulai dengan 0, ganti dengan 62
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }
        // Jika dimulai dengan 62, biarkan
        elseif (!str_starts_with($phone, '62')) {
            // Jika tidak ada prefix 62 atau 0, tambahkan 62
            $phone = '62' . $phone;
        }

        // Pesan test
        $message = urlencode("Halo! Ini adalah pesan test dari sistem pendaftaran Tanah Kavling Freelance. Nomor Anda berhasil terdaftar di sistem kami. 🎉");

        return "https://wa.me/{$phone}?text={$message}";
    }
}
