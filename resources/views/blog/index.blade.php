@extends('layout.main')

@section('content')
<style>
    .aurora-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        /* overflow: hidden; */
    }

    .aurora {
        position: absolute;
        width: 30rem;
        height: 30rem;
        background: radial-gradient(circle, var(--tw-gradient-from), var(--tw-gradient-to));
        opacity: 0.2;
        filter: blur(100px);
        border-radius: 9999px;
    }

</style>
{{-- Artikel Index --}}
<div class="artikel-section text-primary">
    <div class="aurora-bg -z-10">
        <div class="aurora aurora-green from-dema/65 to-dema/35 top-[-10rem] left-[20%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[20rem] right-[85%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[-10rem] left-[70%]"></div>
    </div>
    <div class="artikel max-w-7xl mx-auto py-12 pb-6 text-center ">
        {{-- <h1 class="text-5xl font-bold text-center">PRESS RELEASE</h1> --}}
        <h2 class="text-lg font-bold uppercase tracking-wide bg-black text-white inline-block px-2 py-1">Berita
            Terkini</h2>
        <p class="mt-2 text-lg">Jelajahi Kegiatan-Kegiatan Dan Berita Terkini</p>
    </div>
    {{-- Artikel Section --}}
    {{-- <div class="artikel-section">
            <div class="max-w-7xl px-12 pt-4 pb-12 mx-auto w-full flex flex-wrap justify-center items-center">
                @foreach ($blogs as $blog)
                    <a class="p-2" href="/blog/{{ $blog->id }}">
    <div class="relative overflow-hidden rounded-lg card-artikel text-center">
        <img class="w-[300px] h-[200px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->judul }}">
        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent text-white">
            <span class="font-semibold text-xl mt-3 title">{{ $blog->judul }}</span>
        </div>
    </div>
    </a>
    @endforeach
</div>
</div> --}}

{{-- Bagian Berita Terkini --}}
<div class="container mx-auto px-4">
    <!-- Bagian Header -->
    @if (!isset($beritaUtama1))
    <h1 class="text-center font-semibold underline text-red-500">Maaf, Sedang Tidak Ada Berita</h1>
    @else
    <!-- Grid Berita -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Berita Utama 1 -->
        <a href="/blog/{{ $beritaUtama1->id }}" class="relative col-span-2 row-span-2 overflow-hidden rounded-lg">
            <img src="{{ asset('storage/' . $beritaUtama1->image) }}" alt="{{ $beritaUtama1->judul }}" loading="lazy" class="w-full h-full object-cover transform transition-transform hover:scale-110 duration-300 ease-in-out">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent text-white">
                <span class="bg-blue-500 text-xs font-bold uppercase px-2 py-1">DEMA</span>
                <h3 class="text-2xl font-bold mt-2 transition-colors duration-300 hover:text-orange-500">
                    {{ $beritaUtama1->judul }}</h3>
                <p class="mt-2">{{ $beritaUtama1->user->name }} -
                    {{ \Carbon\Carbon::parse($beritaUtama1->created_at)->translatedFormat('d M Y') }}</p>
            </div>
        </a>

        <!-- Berita Utama 2 -->
        <a href="/blog/{{ $beritaUtama2->id }}" class="relative col-span-2 overflow-hidden rounded-lg">
            <img src="{{ asset('storage/' . $beritaUtama2->image) }}" alt="{{ $beritaUtama2->judul }}" loading="lazy" class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent text-white">
                <span class="bg-blue-500 text-xs font-bold uppercase px-2 py-1">DEMA</span>
                <h3 class="text-2xl font-bold mt-2 transition-colors duration-300 hover:text-orange-500">
                    {{ $beritaUtama2->judul }}</h3>
                <p class="mt-2">{{ $beritaUtama2->user->name }} -
                    {{ \Carbon\Carbon::parse($beritaUtama2->created_at)->translatedFormat('d M Y') }}</p>
            </div>
        </a>

        @foreach ($blogs as $blog)
        <!-- Kartu Berita Lainnya -->
        <a href="/blog/{{ $blog->id }}" class="relative overflow-hidden rounded-lg col-span-2 md:col-span-1">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->judul }}" loading="lazy" class="lg:w-[300px] lg:h-[200px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent text-white">
                <span class="bg-blue-500 text-xs font-bold uppercase px-2 py-1">DEMA</span>
                <h3 class="text-lg font-bold mt-2 transition-colors duration-300 hover:text-orange-500">
                    {{ $blog->judul }}</h3>
            </div>
        </a>
        @endforeach

    </div>
    @endif

</div>
<br>
{{-- End Bagian Berita Terkini --}}
</div>
@endsection
