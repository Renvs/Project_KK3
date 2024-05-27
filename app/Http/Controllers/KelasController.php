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

    function store(Request $request) {

        $request->validate([
            'nama_kelas' => 'max:10|required|string',
            'jurusan' => 'max:50|required|string',
            'lokasi_ruangan' => 'required|string',
            'nama_wali_kelas' => 'required|string',
        ]);

        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_kelas')->insert($input);
        if ($status) {
            return redirect('/kelas')->with('Berhasil', 'Data Kelas Berhasil Ditambahkan');
        } else {
            return redirect('/kelas/create')->with('Gagal', 'Data Kelas Gagal Ditambahkan');
        }
    }

    function edit(Request $request, $id) {
        $kelas = DB::table('t_kelas')->find($id);
        return view('kelas.kelasForm', compact('kelas'));
    }

    function update(Request $request, $id) {
        $request->validate([
            'nama_kelas' => 'max:10|required|string',
            'jurusan' => 'max:50|required|string',
            'lokasi_ruangan' => 'required|string',
            'nama_wali_kelas' => 'required|string',
        ]);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = DB::table('t_kelas')->where('id', $id)->update($input);
        if ($status) {
            return redirect('/kelas')->with('Berhasil', 'Data Kelas Berhasil Diubah');
        } else {
            return redirect('/kelas/edit/'.$id)->with('Gagal', 'Data Kelas Gagal Diubah');
        }
    }

    function destroy($id) {
        $status = DB::table('t_kelas')->where('id', $id)->delete();
        if ($status) {
            return redirect('/kelas')->with('Berhasil', 'Data Kelas Berhasil Dihapus');
        } else {
            return redirect('/kelas')->with('Gagal', 'Data Kelas Gagal Dihapus');
        }
    }
}
