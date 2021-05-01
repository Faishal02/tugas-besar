@extends('layout.template')
@section('title','Edit User')
@section('content')
    <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row-6">
            <div class="form-group">
                <label>Nama</label>
                <input name="nama" class="from-control" value="{{$user->nama}}">
                <div class="text-danger">
                    @error('nama')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" class="from-control" value="{{$user->keterangan}}">
                <div class="text-danger">
                    @error('keterangan')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </div>
    </form>
@endsection