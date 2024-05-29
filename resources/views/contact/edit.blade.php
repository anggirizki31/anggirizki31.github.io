@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <a href="/admin/contacts" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $contact->alamat }}">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" id="" cols="30" rows="10" class="form-control" placeholder="No Telepon">{{ $contact->phone }}</input>
                </div>
                @error('phone')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="text" class="form-control" name="mail" placeholder="E-Mail" value="{{ $contact->mail }}">
                </div>
                @error('mail')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="website" value="{{ $contact->website }}">
                </div>
                @error('website')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Waktu Operasional</label>
                    <input type="text" name="opening" class="form-control" value="{{ $contact->opening }}">
                </div>
                @error('opening')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <input type="text" class="form-control" name="maps_embed" placeholder="maps embed" value="{{ $contact->maps_embed }}">
                </div>
                @error('maps_embed')
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
