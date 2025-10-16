<div class="col-2 sidebar d-flex flex-column align-items-start px-3">
    <a href="{{ route('dashboard') }}" class="fw-bold mb-4 text-decoration-none text-dark h5 d-block">Dashboard</a>
    <a href="{{ route('dashboard.bootcamp') }}" class="nav-link">Bootcamp</a>
    <a href="{{ route('dashboard.course') }}" class="nav-link">Course</a>
    <a href="{{ route('dashboard.sertifikat') }}" class="nav-link">Sertifikat</a>
    <a href="{{ route('dashboard.transaksi') }}" class="nav-link">Transaksi</a>


    <div class="mt-auto w-100">
        <a href="{{ route('setting') }}" class="nav-link">Setting</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-warning w-100 mt-2">Log Out</button>
        </form>
    </div>
</div>
