  @extends('layouts.app') {{-- pastikan ini sesuai dengan layout utama kamu --}}

@section('title', 'dashboard')

@section('content')

<div class="dashboard-page row g-0">
    <!-- Sidebar -->
    <div class="col-2 sidebar d-flex flex-column align-items-start px-3">
        <a href="{{ route('dashboard') }}" class="fw-bold mb-4 text-decoration-none text-dark h5 d-block">Dashboard</a>
        <a href="{{ route('dashboard.bootcamp') }}" class="nav-link">Bootcamp</a>
        <a href="{{ route('dashboard.course') }}" class="nav-link">Course</a>
        <a href="{{ route('dashboard.sertifikat') }}" class="nav-link">Sertifikat</a>
        <a href="{{ route('dashboard.transaksi') }}" class="nav-link">Transaksi</a>

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

<!-- === Halaman Setting === -->
        <h4 class="fw-bold mb-3">Pengaturan Akun</h4>

        <div class="card p-4 shadow-sm" style="border-radius: 15px;">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Foto Profil -->
                <div class="text-center mb-4">
                <img src="{{ Auth::user()->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                         class="rounded-circle mb-3"
                         width="120" height="120" 
                         alt="Foto Profil"
                         style="object-fit: cover;">
                    <div class="w-50 mx-auto">
                        <input type="file" name="profile_photo" class="form-control mt-2">
                    </div>
                </div>

                <!-- Data Diri (semua ke bawah) -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" value="{{ Auth::user()->username }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
                </div>

                <!-- Lupa Password -->
                <div class="mb-3">
                    <a href="" class="text-decoration-none text-danger">
                        Lupa Password?
                    </a>
                </div>

                <!-- Tombol Simpan di Kanan -->
                <div class="text-end">
                    <button type="submit" class="btn btn-warning fw-semibold px-4">Simpan</button>
                </div>
            </form>
        </div>
@endsection