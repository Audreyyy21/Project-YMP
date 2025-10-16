@extends('layouts.app')

@section('title', 'Bootcamp')

@section('content')
<div class="dashboard-page row g-0">
    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Main Content --}}
    <div class="col main-content">
        <div class="stats-container">
            <div class="stat-box">
                <h5>{{ Auth::user()->name }}</h5>
                <small class="text-muted">{{ Auth::user()->username }}</small>
            </div>
            <div class="stat-box">
                <h5>Total Kelas</h5>
                <p>0</p>
            </div>
            <div class="stat-box">
                <h5>Sedang Berjalan</h5>
                <p>0</p>
            </div>
            <div class="stat-box">
                <h5>Sertifikat</h5>
                <p>0</p>
            </div>
        </div>

        <div class="empty-bootcamp text-center mt-5">
            <div class="empty-card p-5 rounded-4 shadow-sm mx-auto">
                <img src="{{ asset('images/empty-icon.png') }}" alt="Empty" width="90" class="mb-3">
                <h5 class="fw-bold text-secondary">Sayang sekali kamu belum ikut bootcampnya.</h5>
                <p class="text-muted mb-4">Yuk, gabung dulu biar bisa mulai belajar!</p>
                <button class="btn btn-buy">Beli Sekarang</button>
            </div>
        </div>
    </div>
</div>
@endsection
