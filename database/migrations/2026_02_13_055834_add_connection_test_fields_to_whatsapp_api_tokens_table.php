<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('whatsapp_api_tokens', function (Blueprint $table) {
            // Tambahkan field untuk Twilio
            $table->string('account_sid')->nullable()->after('provider');
            $table->string('auth_token')->nullable()->after('account_sid');

            // Rename sender_number ke phone_number (konsistensi)
            // Note: Tidak bisa rename lewat alter, harus lewat raw SQL
            // Kita biarkan sender_number dan tambahkan phone_number sebagai reference
            $table->string('phone_number')->nullable()->after('sender_number');

            // Field untuk test koneksi
            $table->timestamp('last_tested_at')->nullable()->after('is_default');
            $table->boolean('last_test_status')->nullable()->after('last_tested_at');
            $table->text('last_test_message')->nullable()->after('last_test_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('whatsapp_api_tokens', function (Blueprint $table) {
            $table->dropColumn([
                'account_sid',
                'auth_token',
                'phone_number',
                'last_tested_at',
                'last_test_status',
                'last_test_message',
            ]);
        });
    }
};
