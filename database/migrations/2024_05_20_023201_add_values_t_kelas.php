<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('t_kelas')->insert([
            ['nama_kelas' => 'XI RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'lokasi_ruangan' => 'Gedung C 2.2', 'nama_wali_kelas' => 'Pak Budi'],
            ['nama_kelas' => 'XI RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak', 'lokasi_ruangan' => 'Gedung A 2.2', 'nama_wali_kelas' => 'Ibu Sari'],
            ['nama_kelas' => 'XI RPL 3', 'jurusan' => 'Rekayasa Perangkat Lunak', 'lokasi_ruangan' => 'Gedung C 2.1', 'nama_wali_kelas' => 'Pak Agus'],
            ['nama_kelas' => 'XI DKV 1', 'jurusan' => 'Desain Komunikasi Visual', 'lokasi_ruangan' => 'Gedung Multimedia', 'nama_wali_kelas' => 'Ibu Nita'],
            ['nama_kelas' => 'XI DKV 2', 'jurusan' => 'Desain Komunikasi Visual', 'lokasi_ruangan' => 'Gedung Multimedia', 'nama_wali_kelas' => 'Pak Joko'],
            ['nama_kelas' => 'XI TKJ 1', 'jurusan' => 'Teknik Komunikasi Jaringan', 'lokasi_ruangan' => 'Gedung E 2.1 ', 'nama_wali_kelas' => 'Pak Andi'],
            ['nama_kelas' => 'XI TKJ 2', 'jurusan' => 'Teknik Komunikasi Jaringan', 'lokasi_ruangan' => 'Gedung C 2.8', 'nama_wali_kelas' => 'Ibu Lestari'],
            ['nama_kelas' => 'XI TAV 1', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung Elektronika', 'nama_wali_kelas' => 'Pak Hendra'],
            ['nama_kelas' => 'XI TAV 2', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung Elektronika', 'nama_wali_kelas' => 'Pak Dedi'],
            ['nama_kelas' => 'XI TAV 3', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung Elektronika', 'nama_wali_kelas' => 'Ibu Yuni'],
            ['nama_kelas' => 'XI TAV 4', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung Elektronika', 'nama_wali_kelas' => 'Pak Fajar'],
            ['nama_kelas' => 'XI TITL 1', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung TITL', 'nama_wali_kelas' => 'Pak Bambang'],
            ['nama_kelas' => 'XI TITL 2', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung TITL', 'nama_wali_kelas' => 'Ibu Rina'],
            ['nama_kelas' => 'XI TOI 1', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung TOI', 'nama_wali_kelas' => 'Pak Arif'],
            ['nama_kelas' => 'XI TOI 2', 'jurusan' => 'Teknik Audio Visual', 'lokasi_ruangan' => 'Gedung TOI', 'nama_wali_kelas' => 'Ibu Dewi'],
        ]);
        
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
