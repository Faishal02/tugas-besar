@extends('layout.template')
@section('title','Edit User')
@section('content')
    <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row-6">
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="from-control">
                <div class="text-danger">
                    @error('foto')
                        {{$message}}
                    @enderror
                </div>
            </div>
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
                <label>Email</label>
                <input name="email" class="from-control" value="{{$user->email}}">
                <div class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" class="from-control" value="{{$user->passowrd}}">
                <div class="text-danger">
                    @error('password')
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