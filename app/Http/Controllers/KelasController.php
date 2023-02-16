<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')
        ->select('nama_jurusan', 'tahun_ajaran', 'kelas.*', )
        ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
        ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
        ->get();
        // dd($kelas);
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $angkatan = DB::table('tahun_ajaran')->get();
        $jurusan = DB::table('jurusan')->get();
        return view('kelas.create', compact('jurusan', 'angkatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         Request()->validate(
            [
                'tingkatan'=>'required',
                'no_kelas'=>'required',
                'nama_jurusan'=>'required',
                'tahun_ajaran'=>'required'
            ]
        );

        $kelas = (Request()->tingkatan);
        $no_kelas = (Request()->no_kelas);
        $jurusan = (Request()->nama_jurusan);
        $tahun = (Request()->tahun_ajaran);


        // insert data to database
        DB::table('kelas')->insert([
            'tingkatan'=>$kelas,
            'no_kelas'=>$no_kelas,
            'id_jurusan'=>$jurusan,
            'id_tahun'=>$tahun,
        ]);


        return redirect('/NAILUL-HUDA/kelas')->with('success','Berhasil Menambah kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('kelas')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'kelas berhasil di hapus');
    }
}
