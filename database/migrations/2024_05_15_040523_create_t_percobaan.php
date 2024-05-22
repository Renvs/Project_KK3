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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('nomor_tlp', 255)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('nik', 100)->unique();
            $table->date('tgl_lahir')->nullable();
            $table->string('umur', 2)->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->string('kewarganegaraan', 50)->nullable();
            $table->string('pendidikan_terakhir', 100)->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->string('status_perkawinan', 100)->nullable();
            $table->string('nama_ibu_kandung', 255);
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
