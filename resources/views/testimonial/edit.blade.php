@extends('layouts.app')

@section('title', 'Data Testimonial')

@section('content')

<div class="container">
    <a href="/admin/testimonials" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $testimonial->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $testimonial->name}}">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" class="form-control" name="job" placeholder="Job" value="{{ $testimonial->job}}">
                </div>
                @error('job')
                <small style="color:red">{{$message}}</small>
                @enderror

                <img src="../images/{{ $testimonial->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar Profil</label>
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
