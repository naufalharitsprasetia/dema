@extends('layout.main')

@section('content')
{{-- Hero Section --}}
<div class="min-h-svh flex min-h-screen overflow-hidden justify-center items-center relative isolate z-10">

    <x-efek.glowatas />
    <x-efek.glowbawah />

    {{-- main Content --}}
    <div class="text-center flex flex-col justify-center items-center text-dema p-3 md:p-8 z-20">
        <div class="flex my-4">
            <img class="w-44 md:w-52" src="/img/logodema.png" alt="">
        </div>
        {{-- <span class="mt-6 uppercase text-sm">Website Resmi</span> --}}
        <h1 class="mt-3 md:mt-6 font-jakarta font-extrabold uppercase text-3xl md:text-5xl"
            style="text-shadow: 0px 0px 12px rgb(85 241 255);letter-spacing: 5.76px;line-height: 96.965%;">
            Dewan
            <br>Mahasiswa
        </h1>
    </div>
</div>

{{-- Kabinet Section --}}
<div class="kabinet-section bg-secondary bg-cover" style="background-image: url('/img/tulisanhadisatya.png')">
    <div class="kabinet flex flex-col max-w-7xl mx-auto pt-16 text-center justify-center">
        <div class="">
            <h1 class="font-jakarta text-5xl font-bold drop-shadow-lg text-primary">KABINET HADISATYA</h1>
        </div>
    </div>
    <div class="mx-auto">
        <img class="mx-auto" src="/img/fotokita.png" alt="" loading="lazy">
    </div>
</div>
{{-- Tentang Dema Section --}}
<div class="about-section bg-primary">
    <div class="about flex flex-col lg:flex-row max-w-7xl mx-auto px-12 py-16 text-secondary">
        <div class="logo-about w-full w-600 flex items-center justify-center px-10">
            <img class="w-600" src="/img/logodema.png" alt="" loading="lazy">
        </div>
        <div class="text-about">
            <h2 class="font-bold text-[50px] text-center mb-8">Tentang DEMA</h2>
            <p class="text-base font-normal">Dewan Mahasiswa (DEMA) adalah sebuah organisasi dari, oleh, dan untuk
                mahasiswa. dewan mahasiswa juga merupakan organisasi tertinggi di universitas darussalam gontor yang
                membantu rektor menaungi seluruh aspek kehidupan mahasiswa.</p>
            <br>
            <p>Dewan Mahasiswa bertanggung jawab atas keseluruhan dinamika yang ada, dan perannya dalam khidmahnya
                kepada nusa, bangsa dan agama dengan cara belajar, berkarya, dan berjuang berdasarkan olah dzikir, olah
                pikir, olah rasa dan olah raga. Tujuan dari dewan mahasiswa adalah ikut serta dalam pembinaan di
                Universitas Darussalam Gontor dalam rangka membentuk mahasiswa mu'min, muslim yang berbudi tinggi,
                berbadan sehat, berpengetahuan luas, dan berpikiran bebeas serta taat menjalankan dan menegakkan
                syari'at islam, berkhidmah kepada bangsa dan negara </p>
        </div>
    </div>
</div>
{{-- Visi Misi Section --}}
<div class="visimisi-section bg-secondary text-primary">
    <div class="visimisi flex flex-wrap md:flex-nowrap mx-auto max-w-7xl px-10 py-16">
        <div class="visi">
            <h2 class="font-semibold text-xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Visi
            </h2>
            <p class="text-[18px]">Menjadikan Dewan Mahasiswa Universitas Darussalam Gontor sebagai wadah inklusif yang
                berperan inspiratif,
                inklusif, dan inovatif dalam membangun karakter, kompetensi, dan kontribusi mahasiswa, guna menciptakan
                generasi pemimpin yang berintegritas, berwawasan luas, dan berkomitmen pada nilai-nilai Islami.</p>
        </div>
        <div class="misi mt-4 md:mt-0">
            <h2 class="font-semibold text-xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Misi
            </h2>
            <ul class="text-[18px]">
                <li>- Membangun lingkungan yang kondusif bagi seluruh mahasiswa untuk mengembangkan potensi secara
                    optimal, baik dalam aspek intelektual, spiritual, maupun sosial, sehingga dapat menjadi pemimpin
                    yang inspiratif dan membawa perubahan positif bagi lingkungan.
                </li>
                <br>
                <li>- Membangun mahasiswa Universitas Darussalam Gontor sebagai individu yang unggul dan berdaya saing
                    melalui pengembangan jejaring antar kampus, baik di tingkat nasional maupun internasional, sebagai
                    dukungan terhadap misi internasionalisasi kampus pada tingkat (world-class university) dan
                    memperluas eksistensi mahasiswa di berbagai kancah global.
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Count Section --}}
<div class="count-section bg-third text-white">
    <div
        class="count flex flex-wrap md:flex-nowrap gap-12 max-w-7xl px-12 py-16 mx-auto justify-center md:justify-between items-center">
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">64</h2>
            <span class="font-bold text-xl">Pengurus</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">11</h2>
            <span class="font-bold text-xl">Departemen</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">13</h2>
            <span class="font-bold text-xl">UKM</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">17</h2>
            <span class="font-bold text-xl">Himpunan</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">1300</h2>
            <span class="font-bold text-xl">Mahasiswa</span>
        </div>
    </div>
</div>
{{-- Artikel Section --}}
<div class="artikel-section bg-primary text-secondary">
    <div class="artikel flex flex-col md:flex-row max-w-7xl px-12 pt-16 mx-auto">
        <div class="heading-artikel pr-10 mr-8">
            <h2 class="font-semibold text-5xl mb-8">Berita Acara</h2>
            <img class="w-[750px] h-[300px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out mb-4"
                src="{{ asset('storage/' . $beritaUtama->image) }}" alt="" loading="lazy">
            <h3 class="font-bold text-3xl">{{ $beritaUtama->judul }}</h3>
            <br>
            <a href="/blog/{{ $beritaUtama->id }}"
                class="text-sixth font-semibold text-xl hover:opacity-85">Selengkapnya >></a>
        </div>
        <div class="mt-6 md:mt-0 kanan-artikel w-full flex flex-wrap pl-8 border-l-4 border-secondary">
            @foreach ($blogs as $blog)
            {{-- card artikel --}}
            <a class="hover:bg-third/80 rounded-lg p-2" href="/blog/{{ $blog->id }}">
                <div class="card-artikel text-center">
                    <img class="w-[300px] h-[200px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out mb-4"
                        src="{{ asset('storage/' . $blog->image) }}" alt="" loading="lazy">
                    <span class="font-semibold text-xl mt-3">{{ $blog->judul }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="flex max-w-7xl px-12 justify-center align-center pt-8 pb-16 mx-auto">
        <a href="" class="bg-sixth text-white px-2 py-2 rounded-md hover:opacity-85">Artikel Lainnya</a>
    </div>
</div>
{{-- Video Profil Section --}}
<div class="video-section bg-secondary bg-cover" style="background-image: url('/img/videocorak.png')">
    <div class="artikel max-w-7xl px-12 pt-12 mx-auto pb-12">
        <div class="mx-auto text-center">
            <h2 class="text-primary text-5xl font-bold">Video Profil</h2>
        </div>
        {{-- <div class="relative w-full pt-[66%] bg-no-repeat bg-center bg-cover" style="background-image: url();">
        </div> --}}
        <div class="flex justify-center items-center mx-auto pt-8">
            <iframe width="840" height="460" src="https://www.youtube.com/embed/LkM0EQjiVyM?si=Evdj5ncBUN6EhFIG"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection