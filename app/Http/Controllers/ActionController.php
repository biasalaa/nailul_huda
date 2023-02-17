<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str;
use App\Models\User;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')
            ->select('nama_jurusan', 'tahun_ajaran', 'kelas.*',)
            ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
            ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
            ->get();
        return view('action.index', compact('kelas'));
    }

    public function proses(Request $request)
    {
        Request()->validate(
            [
                'id_kelas' => 'required',
                'jumlah' => 'required',
            ]
        );

        $kelas = (Request()->id_kelas);
        $dana = (Request()->jumlah);



        // if(countUpdate < 3){
        //     return redirect('/NAILUL-HUDA/confirm')->with('error','Update Status maximal 3 kali');
        // }

        // insert data to database
        DB::table('pemasukan')->insert([
            'id_kelas' => $kelas,
            'jumlah' => $dana,
            'status' => 'unsukses',
            'countUpdate' => 1
        ]);

        return redirect('/NAILUL-HUDA/dataConfirm')->with('success', 'Berhasil Menambah Dana');
    }

    public function konfirm()
    {
        $pembayaran = DB::table('pemasukan')
            ->select('pemasukan.*', 'kelas.*', 'nama_jurusan',)
            ->join('kelas', 'pemasukan.id_kelas', 'kelas.id')
            ->join('jurusan', 'kelas.id_jurusan', 'jurusan.id')
            ->join('tahun_ajaran', 'kelas.id_tahun', 'tahun_ajaran.id')
            ->where('status', 'unsukses')
            ->get();
        return view('action.confirm', compact('pembayaran'));
    }

    public function sukses(Request $request, $id)
    {
        dd('s');
        DB::table('pemasukan')->where('id', $id)->update([
            'status' => 'sukses',
            'countUpdate' => +1
        ]);
    }

    public function test()
    {
        $data = User::all();
        return response()->json($data);
    }
}
