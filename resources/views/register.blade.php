@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #f9fafb;">
    <div class="row w-75 bg-white shadow rounded-4 overflow-hidden">
        {{-- Kolom kiri: Form register --}}
        <div class="col-lg-6 col-md-12 p-5">
            <h2 class="fw-bold mb-2" style="color:#f8b400;">Registrasi</h2>
            <p class="text-secondary mb-4">Buat akun untuk menggunakan platform <strong>YukMari</strong></p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input id="name" type="text" name="name" class="form-control rounded-3 p-3" placeholder="Nama Lengkap" required autofocus>
                </div>

                <div class="mb-3">
                    <input id="username" type="text" name="username" class="form-control rounded-3 p-3" placeholder="Username" required>
                </div>

                <div class="mb-3">
                    <input id="email" type="email" name="email" class="form-control rounded-3 p-3" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input id="password" type="password" name="password" class="form-control rounded-3 p-3" placeholder="Password" required>
                </div>

                <div class="mb-3">
                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control rounded-3 p-3" placeholder="Konfirmasi Password" required>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="agree" required>
                    <label class="form-check-label" for="agree">
                        Saya sudah memahami penjelasan terkait <a href="#" class="text-warning text-decoration-none">kebijakan privasi</a>.
                    </label>
                </div>

                <button type="submit" class="btn w-100 p-3 fw-semibold" style="background-color:#ffc107; border:none; color:white;">
                    Buat Akun
                </button>

                <div class="text-center mt-3">
                    <p>Sudah mempunyai akun?
                        <a href="{{ route('login') }}" class="text-decoration-none fw-bold" style="color:#f8b400;">
                            Masuk
                        </a>
                    </p>
                </div>
            </form>
        </div>

        {{-- Kolom kanan: Logo / ilustrasi --}}
        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center" style="background-color: #f8b400;">
            <img src="{{ asset('images/logoymp.png') }}" alt="Logo YMP" class="img-fluid" style="max-width: 70%; object-fit: contain;">
        </div>
    </div>
</div>
@endsection
