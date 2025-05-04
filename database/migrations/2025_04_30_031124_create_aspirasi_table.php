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
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id');
            $table->string('telpon');
            $table->string('rt');
            $table->string('rw');
            $table->enum('kategori', ['Perekonomian dan Kesejahteraan Sosial', 'Pembangunan', 'Ketenteraman dan Ketertiban Umum']);
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->enum('status_proses', [
                'diajukan',
                'diterima_admin',
                'diterima_kasi',
                'diterima_lurah',
                'selesai'
            ])->default('diajukan');
            $table->timestamp('tanggal_respon')->nullable();
            $table->timestamps();
            $table->foreign('warga_id')->references('id')->on('warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasi');
    }
};
