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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('sapaan'); // Bapak/Ibu/Saudara/Saudari
            $table->string('nama');
            $table->string('telepon');
            $table->enum('gender', ['L', 'P']);
            $table->integer('usia');
            $table->string('domisili');
            $table->string('pekerjaan');
            $table->boolean('is_available')->default(true); // Status available untuk kerja
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
