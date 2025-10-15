<nav class="navbar navbar-expand-lg fixed-top" style="background: transparent; transition: 0.3s;">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/logoymp.png') }}" alt="Logo" style="height: 50px; object-fit: contain; width: 100px">
    </a>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-3">
          <a class="nav-link fw-semibold text-white active" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-semibold text-white" href="{{ route('aboutUs') }}">Tentang Kami</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-semibold text-white" href="#program">Program</a>
        </li>
          <li class="nav-item mx-3">
          <a class="nav-link fw-semibold text-white" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>

    <!-- Tombol kanan -->
    <div class="d-flex">
      <a href="/register" class="btn btn-outline-light rounded-pill me-2 px-4">Daftar</a>
      <a href="/login" class="btn btn-outline-light rounded-pill px-4">Masuk</a>
    </div>

    <!-- Button responsive -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<style>
  .navbar .nav-link:hover {
    color: #FFD700 !important; /* warna kuning saat hover */
  }
</style>
