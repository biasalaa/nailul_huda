<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Str;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bio = DB::table('bio')->get();
        return view('bio.index', compact('bio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bio.create');
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
                'nama_masjid'=>'required',
            ]
        );

        $bio = Str::upper(Request()->nama_masjid);


        // insert data to database
        DB::table('bio')->insert([
            'nama_masjid'=>$bio,
        ]);


        return redirect('/NAILUL-HUDA/bio')->with('success','Berhasil Menambah Bio Data Masjid');
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
        $bio = DB::table('bio')->where('id', $id)->first();
        return view('bio.edit', compact('bio'));
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
                'nama_masjid'=>'required',
            ]
        );

        $bio = Str::upper(Request()->nama_masjid);

        // update data to database
        DB::table('bio')->where('id',$id)->update([
            'nama_masjid'=>$bio,
        ]);

        return redirect('/NAILUL-HUDA/bio')->with('success','Berhasil Mengedit Bio Data Masjid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bio')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Bio Data Masjid berhasil di hapus');
    }
}
