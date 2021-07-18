@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-centre">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <a href= "{{route('nilai.create')}}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                    {{-- <a href= "makul/tambah" class="btn btn-sm btn-primary float-right">Tambah Data</a> --}}
                </div>
                <div class="card-body">
                    </div class="table-responsive">
                            <table class="table table-bordered">
                                            <tr>
                                                <th>NO</th>
                                                <th>NPM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Nama Makul</th>
                                                <th>SKS</th>
                                                <th>Nilai</th>
                                                <th>AKSI</th>
                                            </tr>
                                            @php
                                                    $no=1
                                            @endphp
                                           @foreach ($data as $nl )
                                            <tr>
                                                <td>{{$no++}} </td>

                                                <td>{{$nl ->mahasiswa->npm}}</td>
                                                <td>{{$nl ->mahasiswa->nama_mahasiswa}}</td>
                                                <td>{{$nl ->makul->nama_makul}}</td>
                                                <td>{{$nl ->makul->sks}}</td>
                                                <td>{{$nl ->nilai}}</td>

                                                <td>

                                                    <form action='{{route('nilai.destroy',$nl->id)}}'' method="POST">
                                                        @csrf
                                                    @method('delete')
                                                    <a href="{{ route('nilai.edit', $nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                    </form>
                                                    {{-- <a href="{{route('makul.destroy', $mkl->id)}}">Hapus</a> --}}
                                                    {{-- <a href={{ route('makul.destroy', $mkl->id) }} class="btn btn-sm btn-danger">Hapus</a> --}}
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
