@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Tambah Data Kelas</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <form action="/NAILUL-HUDA/kelas" method="POST">
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Kelas</label>
                            <select class="form-control" name="tingkatan">
                                <option value="">Pilih Disini</option>
                                <option> X </option>
                                <option> XI </option>
                                <option> XII </option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>No Kelas</label>
                            <select class="form-control" name="no_kelas">
                                <option value="">Pilih Disini</option>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Jurusan</label>
                            <select class="form-control" name="nama_jurusan">
                                <option value="">Pilih Disini</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}"> {{ $j->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Tahun Ajaran</label>
                            <select class="form-control" name="tahun_ajaran">
                                <option value="">Pilih Disini</option>
                                @foreach ($angkatan as $a)
                                    <option value="{{ $a->id }}"> {{ $a->tahun_ajaran }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
