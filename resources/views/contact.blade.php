<!-- @extends('layouts.app')

@section('title', 'Data Kontak')

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
            <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Judul" value="{{ $contact->alamat }}">
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" id="" cols="30" rows="10" class="form-control" placeholder="Phone">{{ $contact->phone }}</input>
                </div>
                @error('phone')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Mail</label>
                    <input type="text" class="form-control" name="mail" placeholder="Mail" value="{{ $contact->mail }}">
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
                    <input type="time" name="opening" class="form-control" value="{{ $contact->opening }}">
                </div>
                @error('opening')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps_Embed</label>
                    <input type="text" class="form-control" name="maps_embed" placeholder="maps_embed" value="{{ $contact->mas_embed }}">
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

@endsection -->
