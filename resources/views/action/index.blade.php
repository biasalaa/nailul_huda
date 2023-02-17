@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Pemasukan Dana</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <form action="/proses" method="POST">
            @csrf
            <div class="row">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Ketua Kelas :</label>
                                <input list="dataList" placeholder="Code Barang" value="{{ Auth::user()->name }}"
                                    class="form-control" value="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="form-control" name="id_kelas" style="width: 100%;">
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
                                <div class="d-flex">
                                    <p>Rp </p>
                                    <input list="dataList" name="jumlah" type="number" placeholder="Jumlah Dana"
                                        class="form-control" autocomplete="off">
                                </div>
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
                                                                                                                                </form>
                                                                                                                            </div>
@endsection
