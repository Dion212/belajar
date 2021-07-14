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
                <form action="{{ Route('makul.store') }}" method="post" class="form-item">
                @csrf
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                <div class="form-group{{ $errors->has('kd_makul') ? ' has-error' : '' }}">
                    <label for="nama">Kode Makul</label>
                    <input type="text" name="kd_makul" class="form-control col-md-12" placeholder="Masukkan Kode Makul">
                    <small class="text-danger">{{ $errors->first('kd_makul') }}</small>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Makul</label>
                    <input type="text" name="nama_makul" class="form-control col-md-12" placeholder="Masukkan Nama Makul">
                </div>
                {{-- ------------------------------------- --}}

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


                <div class="form-group{{ $errors->has('sks') ? ' has-error' : '' }}">
                    <label for="nama">SKS</label>
                    <input type="number" name="sks" class="form-control col-md-12" placeholder="Masukkan SKS">
                    <small class="text-danger">{{ $errors->first('sks') }}</small>

                </div>

                 {{---------------------------------------}}
                <button type="submit" class="btn btn-primary " name="simpan">Simpan</button>
                <a href="{{route('mhs')}}" class="btn btn-md btn-danger" >Batal</a>
            </form>
        </div>
    </div>


    </div>
</body>

@endsection
