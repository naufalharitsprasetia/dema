<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Canonical --}}
    @stack('canonical')
    <meta name="description"
        content="DEMA Unida Gontor adalah sebuah organisasi mahasiswa di universitas darussalam gontor" />
    {{-- <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TAFSIL | Tafsir Sains Digital" />
    <meta property="og:description"
        content="tafsil.id adalah portal yang mengintegrasikan keagungan wahyu ilahi dengan kedalaman ilmu pengetahuan."
        name="description" />
    <meta property="og:url" content="https://tafsil.id/" />
    <meta property="og:site_name" content="TAFSIL | Tafsir Sains Digital" />
    <meta content="tafsir ayat sains" name="keywords" /> --}}
    {{-- Gtag Manager --}}
    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WFD48NTZ');
    </script> --}}
    <!-- End Google Tag Manager -->
    {{-- Font AWESOME, highlight, sweetalert --}}
    <script src="https://kit.fontawesome.com/0e361b3f2b.js" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    {{-- Highlight --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css" rel="stylesheet">
    {{-- font google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montaga&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Editor --}}
    @stack('styles') <!-- Stack untuk styles jika dibutuhkan -->
    {{-- @push('styles') --}}
    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- Style CSS --}}
    <link href="/css/style.css" rel="stylesheet">
    <link rel="icon" href="/img/logodema.png" type="image/png">
    <title>DEMA | DEWAN MAHASISWA UNIDA GONTOR</title>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFD48NTZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->
    <div id="app" data-authenticated="{{ Auth::check() ? 'true' : 'false' }}"> </div>
