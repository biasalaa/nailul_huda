    @extends('component.master')

    @section('header')
        <div class="section-header">
            <h1>Tambah Data Ketua Kelas</h1>
        </div>
    @endsection

    @section('content')
        <div class="section-body">
            <div class="card">
                <form action="/NAILUL-HUDA/ketu" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Kelas</label>
                                <select class="form-control" name="id_kelas">
                                    <option value="">Pilih Disini</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->tingkatan }} {{ $k->nama_jurusan }}
                                            {{ $k->no_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Username </label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
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
