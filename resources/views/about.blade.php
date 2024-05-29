@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <img src="../images/{{ $about->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="upload_profil">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="title" value="{{ $about->title }}">
                </div>
                @error('judul')
                <small style="color:red">{{$message}}</small>
                @enderror
                
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $about->description }}</textarea>
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
