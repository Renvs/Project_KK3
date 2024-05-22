<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index() {
        $kelas = DB::table('t_kelas')->get();
        $kelasLok = DB::table('t_kelas')->orderBy('lokasi_ruangan', 'ASC')->get();
        $kelasWali = DB::table('t_kelas')->where(DB::raw("SUBSTRING(SUBSTRING_INDEX(nama_wali_kelas, ' ', 2), LENGTH(SUBSTRING_INDEX(nama_wali_kelas, ' ', 1)) + 2, 1)"), '=', 'A')->get();
        $kelasJurKel = DB::table('t_kelas')->orderBy(DB::raw("CONCAT(jurusan, ' ', nama_kelas)"), 'ASC')->get();
        $kelasJur = DB::table('t_kelas')->where('jurusan', '=', 'Rekayasa Perangkat Lunak')->get();
        
        return view('t_kelas', compact('kelas'));

        // 'kelasLok', 'kelasWali', 'kelasJurKel', 'kelasJur'
    }

    function create() {
        return view('kelas.kelasForm');
    }

    function store( Request $request ) {
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_kelas')->insert($input);
        if ($status) {
            return redirect('/kelas')->with('Berhasil', 'Data Kelas Berhasil Ditambahkan');
        } else {
            return redirect('/kelas/create')->with('Gagal', 'Data Kelas Gagal Ditambahkan');
        }
    }
}
