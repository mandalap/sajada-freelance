<?php

namespace Database\Seeders;

use App\Models\Freelancer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leads = [
            [
                'sapaan' => 'Bapak',
                'nama' => 'Ahmad Faisal',
                'telepon' => '081234567890',
                'gender' => 'L',
                'usia' => 35,
                'pekerjaan' => 'Karyawan Swasta',
                'domisili' => 'Jakarta Selatan',
                'catatan' => 'Sangat tertarik dengan kavling di kawasan Bogor. Membutuhkan tanah untuk dibangun rumah tinggal keluarga. Budget sekitar 300-500 juta.',
                'status' => 'hot',
            ],
            [
                'sapaan' => 'Ibu',
                'nama' => 'Siti Rahayu',
                'telepon' => '082345678901',
                'gender' => 'P',
                'usia' => 42,
                'pekerjaan' => 'Wiraswasta',
                'domisili' => 'Bogor',
                'catatan' => 'Mencari kavling untuk investasi jangka panjang. Lebih prefer lokasi yang dekat dengan akses tol.',
                'status' => 'follow_up',
            ],
            [
                'sapaan' => 'Bapak',
                'nama' => 'Budi Santoso',
                'telepon' => '083456789012',
                'gender' => 'L',
                'usia' => 28,
                'pekerjaan' => 'PNS',
                'domisili' => 'Depok',
                'catatan' => 'Baru pertama kali informasi. Akan survei lokasi minggu depan bersama istri.',
                'status' => 'baru',
            ],
            [
                'sapaan' => 'Ibu',
                'nama' => 'Dewi Lestari',
                'telepon' => '084567890123',
                'gender' => 'P',
                'usia' => 38,
                'pekerjaan' => 'Ibu Rumah Tangga',
                'domisili' => 'Bekasi',
                'catatan' => 'Sudah closing kavling type B blok A3 no 5. Pembayaran lunas.',
                'status' => 'closed',
            ],
            [
                'sapaan' => 'Bapak',
                'nama' => 'Rizky Pratama',
                'telepon' => '085678901234',
                'gender' => 'L',
                'usia' => 45,
                'pekerjaan' => 'Pedagang',
                'domisili' => 'Jakarta Timur',
                'catatan' => 'Tidak jadi membeli karena lokasi terlalu jauh dari tempat usia.',
                'status' => 'tidak_tertarik',
            ],
            [
                'sapaan' => 'Ibu',
                'nama' => 'Maya Sari',
                'telepon' => '086789012345',
                'gender' => 'P',
                'usia' => 32,
                'pekerjaan' => 'Guru',
                'domisili' => 'Tangerang Selatan',
                'catatan' => 'Tertarik dengan kavling di cluster yang sudah ada fasilitas lengkap. Meminta brosur via WhatsApp.',
                'status' => 'baru',
            ],
            [
                'sapaan' => 'Bapak',
                'nama' => 'Hendrawan',
                'telepon' => '087890123456',
                'gender' => 'L',
                'usia' => 50,
                'pekerjaan' => 'Pensiunan',
                'domisili' => 'Jakarta Pusat',
                'catatan' => 'Ingin membeli 2 kavling sekaligus untuk investasi dan masa pensiun. Sedang diskusi dengan anak.',
                'status' => 'hot',
            ],
            [
                'sapaan' => 'Ibu',
                'nama' => 'Linda Kusuma',
                'telepon' => '088901234567',
                'gender' => 'P',
                'usia' => 29,
                'pekerjaan' => 'Karyawan Bank',
                'domisili' => 'Bogor',
                'catatan' => 'Follow up via WA hari Sabtu. Menanyakan skema pembayaran KPR.',
                'status' => 'follow_up',
            ],
        ];

        foreach ($leads as $lead) {
            Freelancer::create($lead);
        }
    }
}
