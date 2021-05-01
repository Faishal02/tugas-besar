@extends('layout.template')
@section('title','Tambah Product')
@section('content')
    <form action="/product/insert" method="POST" enctype="multipart/form-data">
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
                <input name="nama" class="from-control" value="{{old('nama')}}">
                <div class="text-danger">
                    @error('nama')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input name="kategori" class="from-control" value="{{old('kategori')}}">
                <div class="text-danger">
                    @error('kategori')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Merek</label>
                <input name="merek" class="from-control" value="{{old('merek')}}">
                <div class="text-danger">
                    @error('merek')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input name="harga" class="from-control" value="{{old('harga')}}">
                <div class="text-danger">
                    @error('harga')
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