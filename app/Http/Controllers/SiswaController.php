<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    function db(){
        $siswa = DB::table('t_siswa')->get();
        return view('belajar', compact('siswa'));
    }

    function create() {
        return view('siswa.form');
    }

    function store(Request $request) {
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_siswa')->insert($input);
        if($status) {
            return redirect('/siswa')->with('Success', 'Data berhasil disimpan');
        } else {
            return redirect('/siswa/create')->with('Error', 'Data gagal disimpan');
        }
    }

    private function getData(){
        return [
            'nama' => 'Lukman',
            'jk' => 'Laki Laki',
        ];
    }

    function index(){
        return view('belajar', $this->getData());
    }

    function index1(){
        return view('hello-world', $this->getData());
    }

    function index2(){
        return view('pwpb24', $this->getData());
    }

    function asc(){
        $siswa = DB::table('t_siswa')->where('golongan_darah', '=','O')->get();
        return view('belajar', compact('siswa'));
    }
}
