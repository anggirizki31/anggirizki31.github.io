@extends('layouts.app')

@section('title', 'Data Blog')

@section('content')

<div class="container">
    <a href="/admin/blogs/create" class="btn btn-primary mb-1">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Tanggal Upload</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <img src="/image/{{ $blog->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>{{ $blog->tanggal_upload }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description}}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf    
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>      
</div>

@endsection