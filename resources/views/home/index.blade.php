@extends('layout.main')

@section('content')
    {{-- Hero Section --}}
    <div class="min-h-svh bg-center flex justify-center items-end"
        style="background-image: url('/img/unidabg.jpg'); background-size: cover; background-repeat: no-repeat">
        {{-- <div class="mx-auto">
            <img class="w-96 mt-8" src="/img/logodema.png" alt="">
        </div> --}}
        <div class="text-center flex flex-col justify-center items-center text-secondary p-8 rounded-tl-xl rounded-tr-xl shadow-lg"
            style="background: linear-gradient(115deg, rgba(0, 104, 174, 0.93) 3.21%, rgba(0, 17, 28, 0.93) 64.41%);">
            <div class="flex my-4">
                <img class="w-52" src="/img/logodema.png" alt="">
            </div>
            {{-- <span class="mt-6 uppercase text-sm">Website Resmi</span> --}}
            <h1 class="mt-6 font-montserrat font-[800] uppercase text-5xl tracking-widest">Dewan <br>Mahasiswa</h1>
        </div>
    </div>
    {{-- Kabinet Section --}}
    <div class="kabinet-section bg-secondary bg-cover" style="background-image: url('/img/tulisanhadisatya.png')">
        <div class="kabinet flex flex-col max-w-7xl mx-auto pt-16 text-center justify-center">
            <div class="">
                <h1 class="font-montaga text-5xl font-bold drop-shadow-lg text-primary">KABINET HADISATYA</h1>
            </div>
        </div>
        <div class="mx-auto">
            <img class="mx-auto" src="/img/fotokita.png" alt="">
        </div>
    </div>
    {{-- Tentang Dema Section --}}
    <div class="about-section bg-primary">
        <div class="about flex max-w-7xl mx-auto px-12 py-16 text-secondary">
            <div class="logo-about w-full w-[150rem] flex items-center justify-center px-10">
                <img class="w-[150rem]" src="/img/logodema.png" alt="">
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
    {{-- Third Section --}}
    <div class="visimisi-section bg-secondary text-primary">
        <div class="visimisi flex mx-auto max-w-7xl px-12 py-16">
            <div class="visi px-8">
                <h2 class="font-semibold text-3xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Visi
                </h2>
                <p class="text-[24px]">Menjadikan Dewan Mahasiswa Universitas Darussalam Gontor sebagai wadah inklusif yang
                    berperan inspiratif,
                    inklusif, dan inovatif dalam membangun karakter, kompetensi, dan kontribusi mahasiswa, guna menciptakan
                    generasi pemimpin yang berintegritas, berwawasan luas, dan berkomitmen pada nilai-nilai Islami.</p>
            </div>
            <div class="misi px-8">
                <h2 class="font-semibold text-3xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Misi
                </h2>
                <ul class="text-[24px]">
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
        <div class="count flex gap-12 max-w-7xl px-12 py-16 mx-auto justify-between items-center">
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
        <div class="artikel flex max-w-7xl px-12 pt-16 mx-auto">
            <div class="heading-artikel pr-10 mr-8">
                <h2 class="font-semibold text-5xl mb-8">Berita Acara</h2>
                <img class="w-[750px] mb-4" src="/img/artikel1.png" alt="">
                <h3 class="font-bold text-3xl">Gebyar Kemerdekaan 2024</h3>
                <br>
                <a href="#" class="text-sixth font-semibold text-xl hover:opacity-85">Selengkapnya >></a>
            </div>
            <div class="kanan-artikel w-full flex flex-wrap pl-8 border-l-4 border-secondary">
                {{-- card artikel --}}
                <a class="hover:bg-third/80 rounded-lg p-2" href="">
                    <div class="card-artikel text-center">
                        <img class="w-[300px] mb-4" src="/img/artikel2.png" alt="">
                        <span class="font-semibold text-xl mt-3">LDK Dema Hadisatya</span>
                    </div>
                </a>
                {{-- card artikel --}}
                <a class="hover:bg-third/80 rounded-lg p-2" href="">
                    <div class="card-artikel text-center">
                        <img class="w-[300px] mb-4" src="/img/artikel3.png" alt="">
                        <span class="font-semibold text-xl mt-3">Internal Cup 2024</span>
                    </div>
                </a>
                {{-- card artikel --}}
                <a class="hover:bg-third/80 rounded-lg p-2" href="">
                    <div class="card-artikel text-center">
                        <img class="w-[300px] mb-4" src="/img/artikel4.png" alt="">
                        <span class="font-semibold text-xl mt-3">Pelantikan Dema Hadisatya</span>
                    </div>
                </a>
                {{-- card artikel --}}
                <a class="hover:bg-third/80 rounded-lg p-2" href="">
                    <div class="card-artikel text-center">
                        <img class="w-[300px] mb-4" src="/img/artikel5.png" alt="">
                        <span class="font-semibold text-xl mt-3">Peringatan 17 Agustus Ke-79</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex max-w-7xl px-12 justify-center align-center pt-8 pb-16 mx-auto">
            <a href="" class="bg-sixth text-white px-2 py-2 rounded-md hover:opacity-85">Artikel Lainnya</a>
        </div>
    </div>
    {{-- Video Profil Section  --}}
    <div class="video-section bg-secondary bg-cover" style="background-image: url('/img/videocorak.png')">
        <div class="artikel max-w-7xl px-12 pt-12 mx-auto">
            <div class="mx-auto text-center">
                <h2 class="text-primary text-5xl font-bold">Video Profil</h2>
            </div>
            <div class="relative w-full pt-[66%] bg-no-repeat bg-center bg-cover" style="background-image: url();">
                <iframe title="youtubeVt " class="absolute top-[14.7%] left-[8%] w-[84.3%] h-[67%] border-none"
                    src="https://www.youtube.com/embed/qkUEztoUfmI?si=5mRRrZc3PEuxzdOo"
                    allow="accelerometer; clipboard-write; encrypted-media;" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
