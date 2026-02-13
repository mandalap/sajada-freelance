<?php

namespace App\Jobs;

use App\Models\Freelancer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class RegisterSuccessJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $member;

    public function __construct($member)
    {
        $this->member = $member;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $member = $this->member;

        // Langsung gunakan data dari member yang sudah di-pass
        $telepon = $member->telepon;
        $sapaan = $member->sapaan;
        $nama = $member->nama;

        $data = [
            'api_key' => "WSY8Xmnu6CNcd0YFtjqicnxM38WgXY",
            'sender'  => "6285696686753",
            'number'  => $telepon,
            'message' => "Halo $sapaan $nama, Selamat! 🎉\n\nTerima kasih sudah mendaftar sebagai Agen Freelance Pemasaran Tanah Kavling bersama kami. Anda telah mengambil langkah pertama menuju penghasilan tambahan yang lebih baik!\n\nUntuk memulai perjalanan sukses Anda, silakan bergabung ke grup resmi kami sekarang:\n👉 https://chat.whatsapp.com/LEEcdfholM34yGKx0szuio?mode=gi_t\n\nDi grup, Anda akan mendapatkan:\n✅ Panduan lengkap cara kerja\n✅ Materi pelatihan & tips closing\n✅ Update produk & promo terbaru\n✅ Dukungan tim & sesama agen\n\nJangan lewatkan! Semua yang Anda butuhkan untuk mulai menghasilkan ada di grup.\nSampai jumpa di dalam! 💪🔥",
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://wablitz.web.id/send-message",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        // Log hasil pengiriman
        if ($error) {
            Log::error('Gagal mengirim WhatsApp ke ' . $telepon . ': ' . $error);
        } else {
            Log::info('Berhasil mengirim WhatsApp ke ' . $telepon . ': ' . $response);
        }
    }
}
