@extends('layouts.app')

@section('content')
<div class="dashboard-page row g-0">
    <!-- Sidebar -->
    <div class="col-2 sidebar d-flex flex-column align-items-start px-3">
        <h5 class="fw-bold mb-4">Dashboard</h5>
        <a href="#bootcamp" class="nav-link">Bootcamp</a>
        <a href="#course" class="nav-link">Course</a>
        <a href="#" class="nav-link">Sertifikat</a>
        <a href="#" class="nav-link">Transaksi</a>

        <div class="mt-auto w-100">
            <a href="#" class="nav-link">Setting</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-warning w-100 mt-2">Log Out</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="col main-content">
        <!-- === Profil & Statistik === -->
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

        <!-- === Daftar Bootcamp === -->
        <h4 class="mt-4 fw-bold">Yuk - Mari Gabung Kelasnya Sekarang</h4>

        <div class="bootcamp-list">
            @foreach ($bootcamps as $bootcamp)
            <div class="bootcamp-card">
                <img src="{{ asset('images/cyberSec.jpg') }}" class="w-100" alt="Bootcamp">
                <div class="card-body">
                    <h6 class="fw-bold text-success text-uppercase">Buy Bootcamp Class</h6>
                    <h5 class="fw-bold">Cyber Security</h5>
                    <p>Bootcamp 1 - Red Team & Blue Team</p>
                    <p class="price-old">Rp2.500.000</p>
                    <p class="price-new">Rp899.000</p>
                    <button class="btn-buy">Beli Sekarang</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
