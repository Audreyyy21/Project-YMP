@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-page row g-0">
    {{-- Sidebar --}}
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="col main-content p-4">
        <h4 class="fw-bold mb-4">Selamat Datang, {{ Auth::user()->name }} 👋</h4>

        {{-- Section Bootcamp --}}
        <h5 class="fw-bold mb-3">Bootcamp Tersedia</h5>
        <div class="row">
            @foreach ($availableBootcamps as $bootcamp)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('images/' . $bootcamp['image']) }}" class="card-img-top" alt="{{ $bootcamp['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bootcamp['title'] }}</h5>
                            <p class="card-text">{{ $bootcamp['desc'] }}</p>
                            <p class="text-muted mb-1"><s>Rp {{ number_format($bootcamp['price'], 0, ',', '.') }}</s></p>
                            <p class="text-success fw-bold">Rp {{ number_format($bootcamp['discount'], 0, ',', '.') }}</p>
                            <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Section Course --}}
        <h5 class="fw-bold mt-5 mb-3">Course Tersedia</h5>
        <div class="row">
            @foreach ($availableCourses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('images/' . $course['image']) }}" class="card-img-top" alt="{{ $course['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course['title'] }}</h5>
                            <p class="card-text">{{ $course['desc'] }}</p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Course</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
