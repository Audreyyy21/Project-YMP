@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="row w-75 shadow rounded-4 overflow-hidden">
        
        {{-- Kolom Kiri: Form Registrasi --}}
        <div class="col-md-6 bg-white p-5">
            <h2 class="fw-bold text-warning mb-3">Registrasi</h2>
            <p class="text-muted mb-4">Buat akun untuk menggunakan platform YukMari</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" class="form-control rounded-3 p-3 @error('name') is-invalid @enderror" 
                        placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="username" class="form-control rounded-3 p-3 @error('username') is-invalid @enderror"
                        placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control rounded-3 p-3 @error('email') is-invalid @enderror"
                        placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 position-relative">
                    <input type="password" name="password" class="form-control rounded-3 p-3 @error('password') is-invalid @enderror"
                        placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control rounded-3 p-3"
                        placeholder="Konfirmasi Password" required>
                </div>

                <div class="form-check mb-3 text-start">
                    <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                    <label class="form-check-label text-muted" for="privacyCheck">
                        Saya sudah memahami penjelasan terkait 
                        <a href="#" class="text-warning text-decoration-none">kebijakan privasi</a>.
                    </label>
                </div>

                <button type="submit" class="btn btn-warning text-white w-100 rounded-3 p-3 fw-semibold">
                    Buat Akun
                </button>
            </form>

           <!-- <p class="mt-4 text-center text-muted">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-warning fw-semibold text-decoration-none">Masuk</a>
                </p> -->
