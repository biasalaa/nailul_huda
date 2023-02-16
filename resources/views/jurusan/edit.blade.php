@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Edit Data Jurusan</h1>
    </div>
@endsection

@section('content')
    {{-- @dd($jurusan) --}}
    <div class="section-body">
        <div class="card">
            <form action="/NAILUL-HUDA/jurusan" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control"
                                value="{{ $jurusan->nama_jurusan }}">
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
