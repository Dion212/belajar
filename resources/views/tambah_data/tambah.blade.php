@extends('layouts.app')
@section('content')
<body>

    <div class="container col-md-6">
    <div class="card">
        <div class="card-haeder bg-primary text-white">
            Tambah Data
        </div>
        <div class="card-body">
            {{-- <form action="{{route('mahasiswa.store')}}" method="post" class="form-item"> --}}
                <form action="" method="post" class="form-item">
                @csrf

                <div class="form-group">
                    <label for="nama">NPM</label>
                    <input type="text" name="npm" class="form-control col-md-12" placeholder="Masukkan Npm">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama_mahasiswa" class="form-control col-md-12" placeholder="Masukkan Nama">
                </div>
                {{-- ------------------------------------- --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Tempat Lahir">
                        </div>
                    </div>

                </div>
            {{-- ----------------------------------------------- --}}
                {{-- <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="nama">Tgl Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control col-md-12" placeholder="Tempat Lahir">
                </div> --}}
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control col-md-12" placeholder="Masukkan Jenis Kelamin">
                </div>
                <div class="form-group">
                    <label for="nama">No Hp</label>
                    <input type="text" name="hp" class="form-control col-md-12" placeholder="Masukkan No Hp">
                </div>
                <div class="form-group">
                    <label for="nama">Alamat </label>
                    <input type="text" name="alamat" class="form-control col-md-12" placeholder="Masukkan Alamat">
                </div>
                <button type="submit" class="btn btn-primary " name="simpan">Simpan</button>
                <button type="submit" class="btn btn-danger " >Batal</button>
            </form>
        </div>
    </div>


    </div>
</body>

@endsection
