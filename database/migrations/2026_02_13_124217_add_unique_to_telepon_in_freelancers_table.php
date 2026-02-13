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
        Schema::table('freelancers', function (Blueprint $table) {
            // Tambahkan unique constraint pada kolom telepon
            $table->unique('telepon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('freelancers', function (Blueprint $table) {
            // Hapus unique constraint dari kolom telepon
            $table->dropUnique(['telepon']);
        });
    }
};
