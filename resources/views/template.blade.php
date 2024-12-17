<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data @yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/solid.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mb-5">
    <div class="text-center mt-8" style="font-size: 2rem;">
        <h2>Mohammad Affan Shofi - 5026221134</h2>
        <h3 class="mt-3" style="font-size: 1.5rem;">@yield('tulisan1')</h3>
    </div>

    <div class="d-flex justify-content-center mt-3">
        @if (!request()->is(['pegawai/edit*', 'pegawai/tambah*', 'buku/edit*', 'buku/create*']))
            <a href="/pegawai"
                class="btn {{ request()->is('pegawai*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                Data Pegawai
            </a>
            <a href="/"
                class="btn {{ request()->is('welcome*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                Dashboard
            </a>
            <a href="/buku"
                class="btn {{ request()->is('buku*') ? 'btn-primary' : 'btn-secondary' }}">
                Data Buku
            </a>
        @endif
    </div>


@yield('link1')

<br/>

@yield('konten')

</div>

</body>
</html>
