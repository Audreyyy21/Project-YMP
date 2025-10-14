@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<div class="container text-center mt-5">
    <h1>🌄 Selamat Datang di Sistem Informasi Tempat Wisata Bandung Raya</h1>
    <p>Jelajahi dan temukan tempat wisata terbaik di Bandung dengan mudah!</p>

    <div class="mt-4">
        <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
        <a href="{{ route('register.form') }}" class="btn btn-outline-secondary">Daftar</a>
    </div>
</div>
@endsection
