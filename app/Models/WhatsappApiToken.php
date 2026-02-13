<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatsappApiToken extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'provider',
        'account_sid',
        'auth_token',
        'phone_number',
        'api_key',
        'api_url',
        'is_active',
        'last_tested_at',
        'last_test_status',
        'last_test_message',
        'metadata',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'last_tested_at' => 'datetime',
        'last_test_status' => 'boolean',
        'metadata' => 'array',
    ];

    /**
     * Test koneksi ke WhatsApp API
     */
    public function testConnection(): array
    {
        $result = [
            'success' => false,
            'message' => '',
            'details' => [],
        ];

        try {
            switch ($this->provider) {
                case 'twilio':
                    $result = $this->testTwilioConnection();
                    break;

                case 'meta':
                    $result = $this->testMetaConnection();
                    break;

                case 'waboxapp':
                    $result = $this->testWaboxappConnection();
                    break;

                default:
                    $result = [
                        'success' => false,
                        'message' => 'Provider tidak dikenali',
                        'details' => [],
                    ];
            }

            // Update status test
            $this->update([
                'last_tested_at' => now(),
                'last_test_status' => $result['success'],
                'last_test_message' => $result['message'],
            ]);

        } catch (\Exception $e) {
            $result = [
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'details' => [],
            ];

            $this->update([
                'last_tested_at' => now(),
                'last_test_status' => false,
                'last_test_message' => $result['message'],
            ]);
        }

        return $result;
    }

    /**
     * Test koneksi Twilio
     */
    private function testTwilioConnection(): array
    {
        if (empty($this->account_sid) || empty($this->auth_token)) {
            return [
                'success' => false,
                'message' => 'Account SID dan Auth Token wajib diisi',
                'details' => [],
            ];
        }

        // Simulasi test koneksi (ganti dengan actual Twilio API call jika sudah ada library)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.twilio.com/2010-04-01/Accounts/{$this->account_sid}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $this->account_sid . ":" . $this->auth_token);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            return [
                'success' => true,
                'message' => 'Koneksi Twilio berhasil! API credentials valid.',
                'details' => ['http_code' => $httpCode],
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Koneksi gagal. HTTP Code: ' . $httpCode,
                'details' => ['response' => $result],
            ];
        }
    }

    /**
     * Test koneksi Meta (WhatsApp Business API)
     */
    private function testMetaConnection(): array
    {
        if (empty($this->api_key) || empty($this->phone_number)) {
            return [
                'success' => false,
                'message' => 'API Key dan Phone Number wajib diisi',
                'details' => [],
            ];
        }

        // Simulasi test koneksi Meta API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v17.0/me");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->api_key,
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            return [
                'success' => true,
                'message' => 'Koneksi Meta WhatsApp API berhasil!',
                'details' => ['http_code' => $httpCode],
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Koneksi gagal. HTTP Code: ' . $httpCode,
                'details' => ['response' => $result],
            ];
        }
    }

    /**
     * Test koneksi Waboxapp
     */
    private function testWaboxappConnection(): array
    {
        if (empty($this->api_key) || empty($this->phone_number)) {
            return [
                'success' => false,
                'message' => 'API Key dan Phone Number wajib diisi',
                'details' => [],
            ];
        }

        // Test koneksi Waboxapp
        $url = $this->api_url ?: 'https://www.waboxapp.com/api/status';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query([
            'uid' => $this->phone_number,
            'token' => $this->api_key,
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $response = json_decode($result, true);

        if ($httpCode === 200 && isset($response['success']) && $response['success']) {
            return [
                'success' => true,
                'message' => 'Koneksi Waboxapp berhasil!',
                'details' => $response,
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Koneksi gagal. ' . ($response['error'] ?? 'Unknown error'),
                'details' => ['response' => $result],
            ];
        }
    }

    /**
     * Scope to filter active configurations
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get status badge color
     */
    public function getStatusColor(): string
    {
        if (!$this->last_tested_at) {
            return 'gray'; // Belum pernah di-test
        }

        return $this->last_test_status ? 'success' : 'danger';
    }

    /**
     * Get status text
     */
    public function getStatusText(): string
    {
        if (!$this->last_tested_at) {
            return 'Belum di-test';
        }

        return $this->last_test_status ? 'Terhubung' : 'Gagal';
    }
}
