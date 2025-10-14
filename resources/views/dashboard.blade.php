@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5 text-center">
    <h2>Selamat Datang, {{ Auth::user()->name }} 🎉</h2>
    <p>Username: {{ Auth::user()->username }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
@endsection
