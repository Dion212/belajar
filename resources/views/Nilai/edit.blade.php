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
                <form action="{{ Route('nilai.update',$nilai->id) }}" method="post" class="form-item">
                    @method('PUT')
                @csrf
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                <div class="form-group{{ $errors->has('makul_id') ? ' has-error' : '' }}">
                    <label for="nama">Nama Makul</label>
                    <select name="makul_id" id="" class="form-control">
                    <option value="">---</option>
                    @foreach ( $makul as $mkl)
                    <option value="{{$mkl->id}}">{!!$mkl->nama_makul!!}</option>
                    @endforeach
                </select>
                    <small class="text-danger">{{ $errors->first('makul_id') }}</small>
                </div>
                {{-- <div class="form-group">
                    <label for="nama">Mahasiswa ID</label>
                    <input type="text" name="mahasiswa_id" class="form-control col-md-12" placeholder="Masukkan ID Mahasiswa ">
                </div> --}}
                <div class="form-group{{ $errors->has('mahasiswa_id') ? ' has-error' : '' }}">
                    <label for="nama">Nama Mahasiswa</label>
                    <select name="mahasiswa_id" id="" class="form-control">
                    <option value="">---</option>
                    @foreach ( $mahasiswa as $mhs)
                    <option value="{{$mhs->id}}">{!!$mhs->nama_mahasiswa!!}</option>
                    @endforeach
                </select>
                    <small class="text-danger">{{ $errors->first('mahasiswa_id') }}</small>
                </div>



                <div class="form-group{{ $errors->has('nilai') ? ' has-error' : '' }}">
                    <label for="nama">Nilai</label>
                    <input type="number" name="nilai" class="form-control col-md-12" placeholder="Masukkan Nilai" value="{{$nilai->nilai}}">
                    <small class="text-danger">{{ $errors->first('nilai') }}</small>

                </div>

                <button type="submit" class="btn btn-primary " name="simpan">Simpan</button>
                <a href="{{route('nilai.index')}}" class="btn btn-md btn-danger" >Batal</a>
            </form>
        </div>
    </div>


    </div>
</body>

@endsection
