@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Tambah Data Tahun Ajaran</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <form action="/NAILUL-HUDA/tahun" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" class="form-control">
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
