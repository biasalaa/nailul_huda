@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Edit Data Kegiatan</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <form action="/NAILUL-HUDA/kegiatan/{{$kegiatan->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Masukkan Gambar</label>
                            <input type="file" name="gambar" class="form-control" value="{{ $kegiatan->gambar }}">
                            @error('gambar')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}">
                            @error('nama_kegiatan')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" name="tgl_kegiatan" class="form-control" value="{{ $kegiatan->tgl_kegiatan }}">
                            @error('tgl_kegiatan')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Waktu Kegiatan</label>
                            <input type="time" name="waktu_kegiatan" class="form-control" value="{{ $kegiatan->waktu_kegiatan }}">
                            @error('waktu_kegiatan')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="{{ $kegiatan->keterangan }}">
                            @error('keterangan')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
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
