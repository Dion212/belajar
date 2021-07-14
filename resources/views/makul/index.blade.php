@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-centre">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul
                    <a href= "{{route('makul.create')}}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                    {{-- <a href= "makul/tambah" class="btn btn-sm btn-primary float-right">Tambah Data</a> --}}
                </div>
                <div class="card-body">
                    </div class="table-responsive">
                            <table class="table table-bordered">
                                            <tr>
                                                <th>NO</th>
                                                <th>Kode Makul</th>
                                                <th>Nama Makul</th>
                                                <th>SKS</th>
                                                <th>AKSI</th>
                                            </tr>
                                            @php
                                                    $no=1
                                            @endphp
                                           @foreach ($makul  as $mkl )
                                            <tr>
                                                <td>{{$no++}} </td>
                                                <td>{{$mkl ->kd_makul}}</td>
                                                <td>{{$mkl ->nama_makul}}</td>
                                                <td>{{$mkl ->sks}}</td>

                                                <td>

                                                    <form action={{route('makul.destroy',$mkl->id)}} method="POST">
                                                        @csrf
                                                    @method('delete')
                                                    <a href="{{ route('makul.edit', $mkl->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
