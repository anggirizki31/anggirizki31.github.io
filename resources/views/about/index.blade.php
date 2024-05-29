@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

<div class="container">
    <a href="/admin/abouts/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($abouts as $about)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <img src="/image/{{ $about->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->description }}</td>
                    <td>
                        <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST">
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