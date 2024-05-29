@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <a href="/admin/contacts/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>E-mail</th>
                    <th>Website</th>
                    <th>Opening</th>
                    <th>Maps Embed</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $contact->alamat }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->mail }}</td>
                    <td>{{ $contact->website }}</td>
                    <td>{{ $contact->opening }}</td>
                    <td>{{ $contact->maps_embed }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
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