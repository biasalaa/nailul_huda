<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = DB::table('users')->where('role', 'pengurus')->get();
        return view('pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );

        $nama = Str::upper(Request()->name);
        $email = (Request()->email);
        $password = (Request()->password);
        $role = (Request()->role);


        // insert data to database
        DB::table('users')->insert([
            'name'=>$nama,
            'email'=>$email,
            'password'=>Hash::make($password) ,
            'role'=>$role,
        ]);


        return redirect('/NAILUL-HUDA/pengurus')->with('success','Berhasil Menambah Pengurus');
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
        $pengurus = DB::table('users')->where('id', $id);
        return view('pengurus.edit', compact('pengurus'));
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
                'name'=>'required',
                'email'=>'required',
            ]
        );

        $name = Str::upper(Request()->name);
        $email = Request()->email;

        // update data to database
        DB::table('users')->where('id',$id)->update([
            'name'=>$name,
            'email'=>$email,
        ]);

        return redirect('/NAILUL-HUDA/pengurus')->with('success','Berhasil Mengedit pengurus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Pengurus berhasil di hapus');
    }
}
