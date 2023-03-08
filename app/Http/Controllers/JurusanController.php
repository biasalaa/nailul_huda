<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use App\Exports\JurusanExport;
use App\Imports\JurusanImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = DB::table('jurusan')->get();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store ca newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate(
            [
                'nama_jurusan'=>'required',
            ]
        );

        $jurusan = Str::upper(Request()->nama_jurusan);


        // insert data to database
        DB::table('jurusan')->insert([
            'nama_jurusan'=>$jurusan,
        ]);


        return redirect('/NAILUL-HUDA/jurusan')->with('success','Berhasil Menambah Jurusan');
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
        $jurusan = DB::table('jurusan')->where('id', $id)->first();
        return view('jurusan.edit', compact('jurusan'));
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
        Request()->validate(
            [
                'nama_jurusan'=>'required',
            ]
        );

        $jurusan = Str::upper(Request()->nama_jurusan);

        // update data to database
        DB::table('jurusan')->where('id',$id)->update([
            'nama_jurusan'=>$jurusan,
        ]);

        return redirect('/NAILUL-HUDA/jurusan')->with('success','Berhasil Mengedit Jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jurusan')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'jurusan berhasil di hapus');
    }

    public function jurusanexport()
    {
        return Excel::download(new JurusanExport,'jurusan.xlsx');
    }

    public function jurusanimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataJurusan', $namaFile);

        Excel::import(new JurusanImport, public_path('/DataJurusan/'.$namaFile));
        return redirect('jurusan.index');
    }
}
