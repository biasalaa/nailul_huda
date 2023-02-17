@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Ubah Data Pengurus</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <form action="/NAILUL-HUDA/pengurus/{{ $pegawai->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Nama</label>
                            <input type="text" name="name" value="{{ $pengurus->name }}" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Username </label>
                            <input type="text" name="email" value="{{ $pengurus->email }}" class="form-control">
                        </div>
                    </div>

                    <input type="hidden" name="role" value="pengurus">


                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
