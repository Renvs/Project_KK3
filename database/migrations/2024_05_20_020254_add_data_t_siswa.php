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
        DB::table('t_siswa')->insert([
            ['nis' => '1112223330', 'nama_lengkap' => 'Lukman Danubrata', 'jk' => 'L', 'golongan_darah' => 'A'],
            ['nis' => '1112223331', 'nama_lengkap' => 'Ahmad Sutrisno', 'jk' => 'L', 'golongan_darah' => 'B'],
            ['nis' => '1112223332', 'nama_lengkap' => 'Siti Aminah', 'jk' => 'P', 'golongan_darah' => 'O'],
            ['nis' => '1112223333', 'nama_lengkap' => 'Budi Santoso', 'jk' => 'L', 'golongan_darah' => 'B'],
            ['nis' => '1112223334', 'nama_lengkap' => 'Dewi Sartika', 'jk' => 'P', 'golongan_darah' => 'A'],
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
