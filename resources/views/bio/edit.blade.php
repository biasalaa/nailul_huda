@extends('component.master')
@section('header')
    <div class="section-header">
        <h1>Edit Bio Data Masjid</h1>
    </div>
@endsection


@section('content')
    {{-- @dd($jurusan) --}}
    <div class="section-body">
        <div class="card">
            <form method="POST" action="/NAILUL-HUDA/bio" >
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Nama Masjid</label>
                            <input type="text" name="nama_masjid" class="form-control"
                                value="{{ $bio->nama_masjid }}">
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
