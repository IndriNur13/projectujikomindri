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
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->bigInteger('nik')->primary()->unsigned();
            $table->string('nama_masyarakat', 100);
            $table->enum('jenis_kelamin', ['laki_laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->text('alamat_masyarakat');
            $table->string('foto_profile', 200)->nullable();
            $table->string('tlpn_masyarakat');
            $table->string('email', 100)->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
