@extends('component.master')

@section('header')
    <div class="section-header">
        <h1>Kegiatan</h1>
    </div>
@endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <a href="/NAILUL-HUDA/kegiatan/create" class="btn btn-success" style="color:white ;">Tambah Data</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto Kegiatan</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">tanggal Kegiatan</th>
                                    <th scope="col">Waktu Kegiatan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                                <tr>
                                    <?php $no = 1; ?>
                                    @foreach ($kegiatan as $kn)
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>
                                            <img src="{{asset('gambarKegiatan/'.$kn->gambar)}}" alt="img" style="width: 70px">
                                        </td>
                                        <td>{{ $kn->nama_kegiatan }}</td>
                                        <td>{{ $kn->tgl_kegiatan }}</td>
                                        <td>{{ $kn->waktu_kegiatan }}</td>
                                        <td>{{ $kn->keterangan }}</td>
                                        <td>
                                            <div class=" d-flex ">
                                                <div class="m-1">
                                                    <a href="/NAILUL-HUDA/kegiatan/{{ $kn->id }}/edit"
                                                        class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="m-1">
                                                    <form class="d-inline" action="/NAILUL-HUDA/kegiatan/{{ $kn->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
