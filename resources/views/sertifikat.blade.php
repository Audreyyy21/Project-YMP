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
        
     <!-- Tabel Sertifikat -->
        <div class="card p-3 text-center">
            <table class="table table-borderless">
                <thead>
                    <tr class="bg-light fw-semibold">
                        <th>ID Sertifikat</th>
                        <th>Nama Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" class="text-muted">Tidak ada sertifikat</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection

  
  
 