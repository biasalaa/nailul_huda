<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = DB::table('kegiatan')->get();
        return view('kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'gambar' => 'required',
                'nama_kegiatan' => 'required',
                'tgl_kegiatan' => 'required',
                'waktu_kegiatan' => 'required',
                'keterangan' => 'required',
            ],
            [
                'gambar.required' => 'gambar wajib di isi',
                'nama_kegiatan.required' => 'Nama wajib di isi',
                'waktu_kegiatan.required' => 'Waktu Kegiatan wajib di isi',
                'tgl_kegiatan.required' => 'Tanggal wajib di isi',
                'keterangan.required' => 'Keterangan wajib di isi',
            ]
        );

        $kegiatan = Str::upper($request->kegiatan);
        $gambar = Request()->file('gambar');
        $nama_kegiatan = Request()->nama_kegiatan;
        $tgl_kegiatan = Request()->tgl_kegiatan;
        $waktu_kegiatan = Request()->waktu_kegiatan;
        $keterangan = Request()->keterangan;


        $namagambar = time().$gambar->getClientOriginalName();
        $gambar->move(public_path("gambarKegiatan"),$namagambar);
        DB::table('kegiatan')->insert([
            'gambar' => $namagambar,
            'nama_kegiatan' => $nama_kegiatan,
            'waktu_kegiatan' => $waktu_kegiatan,
            'tgl_kegiatan' => $tgl_kegiatan,
            'keterangan' => $keterangan,
        ]);

        return redirect('/NAILUL-HUDA/kegiatan')->with('success','Berhasil Menambahkan Kegiatan');
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
        $kegiatan = DB::table('kegiatan')->where('id', $id)->first();
        return view('kegiatan.edit', compact('kegiatan'));
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
        $request->validate(
            [
                'gambar' => 'required',
                'nama_kegiatan' => 'required',
                'tgl_kegiatan' => 'required',
                'waktu_kegiatan' => 'required',
                'keterangan' => 'required',
            ],
            [
                'gambar.required' => 'gambar wajib di isi',
                'nama_kegiatan.required' => 'Nama wajib di isi',
                'waktu_kegiatan.required' => 'Waktu Kegiatan wajib di isi',
                'tgl_kegiatan.required' => 'Tanggal wajib di isi',
                'keterangan.required' => 'Keterangan wajib di isi',
            ]
        );

        $kegiatan = Str::upper($request->kegiatan);
        $gambar = Request()->file('gambar');
        $nama_kegiatan = Request()->nama_kegiatan;
        $tgl_kegiatan = Request()->tgl_kegiatan;
        $waktu_kegiatan = Request()->waktu_kegiatan;
        $keterangan = Request()->keterangan;

        $namagambar = time().$gambar->getClientOriginalName();
        $gambar->move(public_path("gambarKegiatan"),$namagambar);
        DB::table('kegiatan')->where('id', $id)->update([
            'gambar' => $namagambar,
            'nama_kegiatan' => $nama_kegiatan,
            'waktu_kegiatan' => $waktu_kegiatan,
            'tgl_kegiatan' => $tgl_kegiatan,
            'keterangan' => $keterangan,
        ]);

        return redirect('/NAILUL-HUDA/kegiatan')->with('success','Berhasil Menambahkan Kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kegiatan')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'kegiatan berhasil di hapus');
    }
}
