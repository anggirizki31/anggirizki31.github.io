@extends('layouts.app')

@section('title', 'Data Service')

@section('content')

<div class="container">
    <a href="/admin/services" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Bidang 1</label>
                    <input type="text" class="form-control" name="label" placeholder="Bidang 1">
                </div>
                @error('label')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Bidang 2</label>
                    <input type="text" class="form-control" name="label1" placeholder="Bidang 2">
                </div>
                @error('label1')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Bidang 3</label>
                    <input type="text" class="form-control" name="label2" placeholder="Bidang 3">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
