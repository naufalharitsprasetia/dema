@include('layout.head')
@include('sweetalert::alert')
@include('layout.navbar')
@if ($active == 'beranda')
<main class="main-screen relative isolate">
    @elseif ($active == 'about')
    <main class="main-screen relative isolate">
        @else
        <main class="main-screen pt-[64px] relative isolate">
            @endif
            @yield('content')
        </main>
        <div class="before-footer relative isolate"></div>
        @include('layout.footer')