<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index(){
        $kelas = DB::table('kelas')
        ->select('nama_jurusan', 'tahun_ajaran', 'kelas.*', )
        ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
        ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
        ->get();
        return view('action.index', compact('kelas'));
    }
}
