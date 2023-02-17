<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KetuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketu = DB::table('ketua')
            ->select('nama_jurusan', 'kelas.*', 'ketua.*')
            ->join('kelas', 'ketua.id_kelas', 'kelas.id')
            ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
            ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
            ->get();
        return view('ketua.index', compact('ketu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = DB::table('kelas')
            ->select('nama_jurusan', 'tahun_ajaran', 'kelas.*',)
            ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
            ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
            ->get();
        return view('ketua.create', compact('kelas'));
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
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'id_kelas' => 'required',
            ]
        );

        $nama = Str::upper(Request()->name);
        $email = (Request()->email);
        $password = (Request()->password);
        $kelas = (Request()->id_kelas);


        // insert data to database
        DB::table('ketua')->insert([
            'name' => $nama,
            'email' => $email,
            'password' => Hash::make($password),
            'id_kelas' => $kelas,
        ]);


        return redirect('/NAILUL-HUDA/ketu')->with('success', 'Berhasil Menambah Data Ketua Kelas ');
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
        //
    }
}