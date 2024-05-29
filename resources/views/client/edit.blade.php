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
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $blog->title }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                @error('tanggal_upload')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{ $blog->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Tanggal update</label>
                    <textarea name="tanggal_update" id="" cols="30" rows="10" class="form-control" placeholder="tanggal_update">{{ $blog->tanggal_update }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
