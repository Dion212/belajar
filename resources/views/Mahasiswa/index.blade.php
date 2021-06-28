@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href= "{{route('mahasiswa/tambah')}}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                    {{-- <a href= "mahasiswa/tambah" class="btn btn-sm btn-primary float-right">Tambah Data</a> --}}
                </div>
                <div class="card-body">
                    </div class="table-responsive">
                            <table class="table table-bordered">
                                            <tr>
                                                <th>NO</th>
                                                <th>NPM</th>
                                                <th>NAMA LENGKAP</th>
                                                <th>TTL</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>NO HP</th>
                                                <th>ALAMAT</th>
                                                <th>AKSI</th>
                                            </tr>
                                           @foreach ($mahasiswa  as $mhs )
                                            <tr>
                                                <td>{{$mhs->id}} </td>
                                                <td>{{$mhs ->npm}}</td>
                                                <td>{{$mhs ->nama_mahasiswa}}</td>
                                                <td>{{$mhs ->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                                                <td>{{$mhs ->jenis_kelamin}}</td>
                                                <td>{{$mhs ->hp}}</td>
                                                <td>{{$mhs ->alamat}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                            </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
