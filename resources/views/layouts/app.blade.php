<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'YukMari')</title>

    {{-- Tambahkan Vite sekali saja di sini --}}
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
</head>
<body>
    @if (!in_array(Route::currentRouteName(), ['login', 'register']))
        @include('partials.navbar')
    @endif

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Script aktifkan dropdown Bootstrap --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownTriggerList = document.querySelectorAll('.dropdown-toggle');
            dropdownTriggerList.forEach((dropdownToggleEl) => {
                new bootstrap.Dropdown(dropdownToggleEl);
            });
        });
    </script>

     {{-- Script --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- Optional: script tambahan tiap halaman --}}
    @stack('scripts')
</body>
</html>