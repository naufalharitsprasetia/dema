@include('layout.head')
@include('sweetalert::alert')
@include('layout.navbar')
@if ($active == 'beranda')
    <main class="main-screen">
    @else
        <main class="main-screen pt-[64px]">
@endif
@yield('content')
<button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: block">
    <i class="fa-solid fa-arrow-up fa-flip fa-xl" style="color: #1f303b;"></i>
</button>
</main>
@include('layout.footer')
