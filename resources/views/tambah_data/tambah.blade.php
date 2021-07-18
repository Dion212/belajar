@extends('layouts.app')
@section('content')
<body>

    <div class="container col-md-12">

    <div class="card">
        <div class="card-haeder bg-primary text-white">
            Tambah Data
        </div>
        <div class="card-body">
            {{-- <form action="{{route('mahasiswa.store')}}" method="post" class="form-item"> --}}
                <form action="{{ Route('simpan.mhs') }}" method="post" class="form-item">
                @csrf
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                    <label for="nama">NPM</label>
                    <input type="text" name="npm" class="form-control col-md-12" placeholder="Masukkan Npm" required>
                    <small class="text-danger">{{ $errors->first('npm') }}</small>

                </div>
                <div class="form-group{{ $errors->has('nama_mahasiswa') ? ' has-error' : '' }}">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama_mahasiswa" class="form-control col-md-12" placeholder="Masukkan Nama">
                    <small class="text-danger">{{ $errors->first('nama_mahasiswa') }}</small>
                </div>
                {{-- ------------------------------------- --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Tempat Lahir">
                            <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Tempat Lahir" >
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
                    {{-- <input type="text" name="jenis_kelamin" class="form-control col-md-12" placeholder="Masukkan Jenis Kelamin"> --}}
                    <select name="jenis_kelamin" id="" class="form-control col-md-12">
                        <option value="">-----------</option>
                        <option value="l">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                    <label for="nama">No Hp</label>
                    <input type="number" name="hp" class="form-control col-md-12" placeholder="Masukkan No Hp">
                    <small class="text-danger">{{ $errors->first('hp') }}</small>
                </div>
                </div>
            </div>
                 {{---------------------------------------}}
                <div class="form-group">
                    <label for="nama">Alamat </label>
                    {{-- <input type="text" name="alamat" class="form-control col-md-12" placeholder="Masukkan Alamat"> --}}
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control col-md-12"></textarea>
                </div>
                <button type="submit" class="btn btn-primary " name="simpan">Simpan</button>
                <a href="{{route('mhs')}}" class="btn btn-md btn-danger" >Batal</a>
            </form>
        </div>
    </div>


    </div>
</body>

@endsection
