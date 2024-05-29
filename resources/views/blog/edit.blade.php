@extends('layouts.app')

@section('title', 'Data blog')

@section('content')

<div class="container">
    <a href="/admin/blogs" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <img src="/image/{{ $blog->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('file_upload')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="date">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" id="date" class="form-control" placeholder="Tanggal" value="{{ $blog->tanggal_upload }}"></input>
                </div>
                @error('tanggal_upload')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Title</label>
                    <textarea name="title" id="" cols="30" rows="10" class="form-control" placeholder="title">{{ $blog->title }}</textarea>
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="deskripsi">{{ $blog->description }}</textarea>
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
