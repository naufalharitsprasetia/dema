<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Canonical --}}
    {{-- @stack('canonical') --}}
    <meta name="description"
        content="DEMA Unida Gontor adalah sebuah organisasi mahasiswa di universitas darussalam gontor" />
    {{-- Font AWESOME, highlight, sweetalert --}}
    <script src="https://kit.fontawesome.com/0e361b3f2b.js" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    {{-- font google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montaga&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Editor --}}
    @stack('styles')
    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- Style CSS --}}
    @vite('resources/css/app.css')
    <link rel="icon" href="/img/logodema.png" type="image/png">
    <title>DEMA | DEWAN MAHASISWA UNIDA GONTOR</title>
</head>

<body>
    <div id="app" data-authenticated="{{ Auth::check() ? 'true' : 'false' }}"> </div>
