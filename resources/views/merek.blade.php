@extends('layout.template')
@section('title','Merek Barang')
@section('content')
    <a href="/merek/tambah" class="btn btn-sm btn-success">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $data)
                <tr>
                    <td><img src="{{url(''.$data->foto)}}" width="50px"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>
                        <a href="/merek/edit{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection