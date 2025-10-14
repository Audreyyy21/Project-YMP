@extends('layouts.app')

@section('title', 'Login - YukMari')

@section('content')
<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg border-0 p-4" style="max-width: 420px; width: 150%; border-radius: 20px;">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logoymp.png') }}" alt="YukMari" style="height: 50px;">
            <h3 class="fw-bold text-warning mt-3">Masuk</h3>
            <p class="text-muted">Login ke akun YukMari kamu</p>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email kamu" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label small" for="remember">Ingat saya</label>
                </div>
                <a href="#" class="text-warning small text-decoration-none">Lupa password?</a>
            </div>

            <button type="submit" class="btn btn-warning w-100 fw-bold text-white shadow-sm">Masuk</button>
        </form>

        <div class="text-center mt-4">
            <p class="small mb-0">Belum punya akun?
                <a href="{{ route('register') }}" class="text-warning fw-semibold text-decoration-none">Daftar</a>
            </p>
        </div>
    </div>
</div>
@endsection