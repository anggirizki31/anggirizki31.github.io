@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')

<div class="container">
    <a href="/admin/contacts" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">No Telepon</label>
                    <textarea name="phone" id="" cols="30" rows="10" class="form-control" placeholder="No Telepon"></textarea>
                </div>
                @error('phone')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="text" class="form-control" name="mail" placeholder="Email">
                </div>
                @error('mail')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="website">
                </div>
                @error('website')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Opening</label>
                    <input type="text" class="form-control" name="opening" placeholder="opening">
                </div>
                @error('opening')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <input type="text" class="form-control" name="maps_embed" placeholder="Maps Embed">
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
