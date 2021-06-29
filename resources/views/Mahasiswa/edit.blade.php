@extends('layouts.app')
@section('content')
<body>

    <div class="container col-md-12">

    <div class="card">
        <div class="card-haeder bg-primary text-white">
            Edit Data
        </div>
        <div class="card-body">
            {{-- <form action="{{route('mahasiswa.store')}}" method="post" class="form-item"> --}}
                <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post" class="form-item">
                @csrf
                    @method('put')
                <div class="form-group">
                    <label for="nama">NPM</label>
                    <input type="text" name="npm" class="form-control col-md-12" placeholder="Masukkan Npm"  value="{{ is_null
                    ($mahasiswa) ?  : $mahasiswa->npm }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama_mahasiswa" class="form-control col-md-12" placeholder="Masukkan Nama"  value="{{ is_null
                        ($mahasiswa) ? ' ' : $mahasiswa->nama_mahasiswa }}">
                </div>
                {{-- ------------------------------------- --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Tempat Lahir" value="{{ is_null
                                ($mahasiswa) ? ' ' : $mahasiswa->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Tanggal Lahir" value="{{ is_null
                                ($mahasiswa) ? ' ' : $mahasiswa->tgl_lahir}}">
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
                {{---------------------------------------}}
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control col-md-12" placeholder="Masukkan Jenis Kelamin" value="{{ is_null
                        ($mahasiswa) ? ' ' : $mahasiswa->jenis_kelamin }}">
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">No Hp</label>
                    <input type="text" name="hp" class="form-control col-md-12" placeholder="Masukkan No Hp" value="{{ is_null
                        ($mahasiswa) ? ' ' : $mahasiswa->hp }}">
                </div>
                </div>
            </div>
                 {{---------------------------------------}}
                <div class="form-group">
                    <label for="nama">Alamat </label>
                    <input type="text" name="alamat" class="form-control col-md-12" placeholder="Masukkan Alamat" value="{{ is_null
                        ($mahasiswa) ? ' ' : $mahasiswa->alamat}}">
                </div>
                <button type="submit" class="btn btn-primary " name="simpan">Simpan</button>
                <a href="{{route('mhs')}}" class="btn btn-md btn-danger" >Batal</a>
            </form>
        </div>
    </div>


    </div>
</body>

@endsection
