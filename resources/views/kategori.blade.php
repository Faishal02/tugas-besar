@extends('layout.template')
@section('title','Kategori Barang')
@section('content')
    <a href="/kategori/tambah" class="btn btn-sm btn-success">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $data)
                <tr>
                    <td><img src="{{url(''.$data->foto)}}" width="50px"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>
                        <a href="/kategori/edit{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection