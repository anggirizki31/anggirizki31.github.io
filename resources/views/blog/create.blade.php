@extends('layouts.app')

@section('title', 'Data blog')

@section('content')

<div class="container">
    <a href="/admin/blogs" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="date">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" id="tanggal_upload" class="form-control" placeholder="Tanggal">
                </div>
                @error('date')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="description" placeholder="deskripsi">
                </div>
                @error('description')
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
