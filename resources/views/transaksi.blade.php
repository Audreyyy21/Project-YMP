  @extends('layouts.app') {{-- pastikan ini sesuai dengan layout utama kamu --}}

@section('title', 'dashboard')

@section('content')

<div class="dashboard-page row g-0">
    <!-- Sidebar -->
    <div class="col-2 sidebar d-flex flex-column align-items-start px-3">
        <h5 class="fw-bold mb-4">Dashboard</h5>
        <a href="#" class="nav-link">Bootcamp</a>
        <a href="#" class="nav-link">Course</a>
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
  
        <h4 class="fw-bold mb-3">Daftar Transaksi</h4>

        <!-- Tabel Transaksi -->
        <div class="card p-3 mb-3">
            <table class="table table-borderless align-middle text-center">
                <thead class="bg-light fw-semibold">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Program</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="text-muted">Belum ada transaksi</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tombol Bantuan di Bawah Tabel (Kiri) -->
        <div class="mt-3">
            <a href="https://wa.me/6281234567890"
               target="_blank"
               class="btn btn-success d-inline-flex align-items-center px-3 py-2 rounded-pill ">
               <i class="bi bi-whatsapp me-2"></i> Butuh Bantuan?
            </a>
        </div>
</div>
@endsection

  
  
 
