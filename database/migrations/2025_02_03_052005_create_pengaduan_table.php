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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->unsignedBigInteger('nik');
            $table->date('tanggal_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('foto_pengaduan', 255);
            $table->enum('status_pengaduan', ['new', 'proses', 'selesai']);

            // Tambahkan foreign key
            $table->foreign('nik')->references('nik')->on('masyarakat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
