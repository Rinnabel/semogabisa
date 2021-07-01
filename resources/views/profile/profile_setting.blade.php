@extends('master')

@section('content')

<div class="container row">
    <h1>Account</h1>
    <form role="form" action="/pertanyaan" method="POST">
        <div class="form-group">
            <label for="judul">Judul Pertanyaan</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Tulis Judul">
            @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </form>
</div>

@yield('upload')

@endsection
