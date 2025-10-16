<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'YukMari')</title>

    {{-- Bootstrap CSS (CDN) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- SCSS & JS via Vite --}}
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- Navbar hanya muncul jika bukan halaman login/register --}}
    @if (!in_array(Route::currentRouteName(), ['login', 'register', 'register.form', 'dashboard', 'bootcamp', 'course', 'sertifikat', 'transaksi', 'setting']))
        @include('partials.navbar')
    @endif


    {{-- Konten utama --}}
    <main>
        @yield('content')
    </main>

    {{-- Bootstrap Bundle JS (CDN) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Aktifkan dropdown Bootstrap manual (opsional jika kamu butuh kontrol tambahan) --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.dropdown-toggle').forEach(function (el) {
                new bootstrap.Dropdown(el);
            });
        });
    </script>

    {{-- Efek scroll pada navbar --}}
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });
    </script>

    {{-- Optional: tambahan script halaman --}}
    @stack('scripts')
</body>
</html>
