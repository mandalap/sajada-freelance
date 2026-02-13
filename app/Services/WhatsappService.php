<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class WhatsappService
{
    /**
     * Send test message to WhatsApp number
     */
    public function sendMessage(string $phoneNumber, string $message, string $mode = 'testing'): array
    {
        try {
            // Gunakan API Waboxapp default
            $apiUrl = 'https://www.waboxapp.com/api';
            $uid = $phoneNumber; // Format: 6281234567890
            $token = config('services.whatsapp.api_key', 'default_token');

            $response = Http::post("{$apiUrl}/send", [
                'uid' => $uid,
                'token' => $token,
                'message' => $message,
                'mode' => $mode,
            ]);

            $statusCode = $response->status();
            $body = $response->json();

            // Cek response dari Waboxapp
            if ($statusCode == 200 && isset($body['success']) && $body['success'] == true) {
                return [
                    'success' => true,
                    'message' => 'Pesan test berhasil dikirim!',
                    'details' => $body,
                    'status_code' => $statusCode,
                ];
            }

            return [
                'success' => false,
                'message' => 'Gagal mengirim pesan test',
                'error' => $body['message'] ?? 'Unknown error',
                'status_code' => $statusCode,
                'response' => $body,
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Exception: ' . $e->getMessage(),
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Validate phone number format
     */
    public function validatePhoneNumber(string $phoneNumber): bool
    {
        // Format Indonesia: 6281234567890 atau 08xxxxxxxxxx
        return preg_match('/^(\d{10,14})$/', $phoneNumber);
    }

    /**
     * Format phone number to international format (62...)
     */
    public function formatPhoneNumber(string $phoneNumber): string
    {
        // Hapus karakter non-angka
        $phone = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Jika dimulai dengan 0, ganti dengan 62
        if (Str::startsWith($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        return $phone;
    }
}
