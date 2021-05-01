@extends('layout.template')
@section('title','Product')
@section('content')
    <a href="/product/tambah" class="btn btn-sm btn-success">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $data)
                <tr>
                    <td><img src="{{url(''.$data->foto)}}" width="50px"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>    
                        <a href="/product/edit{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection