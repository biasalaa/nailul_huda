@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Pemasukan Dana</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pengurus</label>
                            <input list="dataList" type="search" placeholder="Code Barang" value="Test" class="form-control"
                                value="" autocomplete="off" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-lg-6">
                            <label>Kelas</label>
                            <select class="form-control" name="nama_jurusan" style="width: 100%;">
                                <option value="">Pilih Disini</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->tingkatan }} {{ $k->nama_jurusan }}
                                        {{ $k->no_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Jumlah Dana</label>
                            <input list="dataList" type="number" placeholder="Jumlah Dana" class="form-control"
                                autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col" style="margin-left:auto ;">
                <button type="submit" class="btn btn-primary" ">submit</button>
                            </div>
                        </div>
                    </div>
@endsection
