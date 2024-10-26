@include('layout.head')
@include('sweetalert::alert')
@include('layout.navbar')
@if ($active == 'beranda')
    <main class="main-screen">
    @elseif ($active == 'about')
        <main class="main-screen">
        @else
            <main class="main-screen pt-[64px]">
@endif
@yield('content')
</main>
<button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: block">
    <i class="fa-solid fa-arrow-up fa-flip fa-xl" style="color: white;"></i>
</button>
@include('layout.footer')
