@extends('layout.main')

@section('content')
    {{-- ukm --}}
    <div class="ukm-section text-primary">
        <div class="ukm max-w-7xl mx-auto pt-10 pb-14 px-10">
            <h1 class="text-5xl font-bold text-center mb-4">Unit Kegiatan Mahasiswa (UKM)</h1>
            {{-- <h1 class="tulisan-gelap text-center fw-bolder">Unit Kegiatan Mahasiswa (UKM) - Unida Siman (Putra)</h1> --}}
            <div class="penjelasan-ukm p-4">
                <h2 class="font-semibold text-3xl font-poppins"> APA ITU UKM ?</h2>
                <blockquote> Unit Kegiatan Mahasiswa (UKM) adalah organisasi mahasiswa santri yang dinaungi Dewan Mahasiswa
                    dalam
                    meningkatkan kesamaan minat, kegemaraan, kreativitas dan orientasi aktivitas penyaluran kegiatan
                    ekstrakulikuler didalam kampus </blockquote>
                <br>
                <blockquote> UKM di UNIDA Gontor telah dikelompokkan kedalam 4 bidang yaitu Oleh Dzikir, Olah Fikir, Olah
                    Rasa
                    dan Olah
                    Raga. Sebagai kampus pesantren semua ini adalah salah satu upaya kampus dalam meningkatkan mutu
                    pembinaan
                    minat dan kegemaraan mahasiswa santri serta sebagai sarana dalam menjaga kesehatan rohani dan jasmani.
                    Keberagaman aktivitas dari setiap ukm dan 4 olah yang menjadi asas dari aktivitas tersebut telah
                    membentuk
                    ukm menjadi 22 unit kegiatan mahasiswa.</blockquote>
                <br>

                <div class="my-2 text-center">
                    <h3 class="font-semibold text-xl bg-secondary inline-block p-2 rounded-md">Olah Fikir</h3>
                    <p class="mt-1 text-left"><strong>Olah Fikir</strong> Olah fikir merupakan sebuah aktivitas yang
                        membentuk
                        mahasiswa
                        dalam
                        hal kenseptual, persepsi dan informasi,
                        dalam meningkatkan potensi berpendapat, dan menuliskan pikirannya dalam gagasan dan
                        kelimuannya.</p>
                </div>
                <div class="my-4 text-center">
                    <h3 class="font-semibold text-xl bg-secondary inline-block p-2 rounded-md">Olah Rasa</h3>
                    <p class="mt-1 text-left"> <strong>Olah rasa</strong> kegiatan yang melatih
                        kemampuan mahasiswa dalam berkesenian dan berkebudayaan kemudian
                        dimanifestasikan menjadi sebuah mahakarya yang berkualitas. seni yang dilatih pun merupakan
                        seni
                        murni dan
                        seni terapan yang dapat dirasakan dari nilai keindahan.</p>
                </div>
                <div class="my-4 text-center">
                    <h3 class="font-semibold text-xl bg-secondary inline-block p-2 rounded-md">Olah Dzikir</h3>
                    <p class="mt-1 text-left"><strong>Olah Dzikir</strong> Olah Dzikir merupakan unsur yang paling
                        diutamakan dalam
                        kehidupan
                        mahasiswa untuk mengasah jiwa spritual, kegiatan ini bentuk integritas antara kegiatan
                        rohani
                        dan jasmani mahasiswa dengan menjadikan
                        nilai agama sebagai landasan.</p>
                </div>
                <div class="my-4 text-center">
                    <h3 class="font-semibold text-xl bg-secondary inline-block p-2 rounded-md">Olah Raga</h3>
                    <p class="mt-1 text-left"><strong>Olah Raga</strong> merupakan aktivitas jasmani yang
                        dilakukan untuk melatih kegiatan fisik secara terprogram dengan
                        tujuan meningkatkan keterampilan nilai-nilai fungsional yang mencakup aspek kognitif,
                        efektif,
                        dan sosial
                        bagi mahasiswa.</p>
                </div>
            </div>
        </div>
        <hr>
        {{-- Olah Fikir --}}
        <div class="divisi-card bg-primary text-secondary shadow-lg p-12">
            <h2 class="text-center font-semibold text-2xl mb-8">Divisi Olah Fikir</h2>
            <div class="flex flex-wrap ukm-groups gap-8 justify-evenly items-center">
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/ksei.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Kelompok Studi Ekonomi Islam (KSEI) UNIDA Gontor</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        <hr class="border-secondary border-2 my-2">
        {{-- Olah Rasa --}}
        <div class="divisi-card bg-primary text-secondary shadow-lg p-12">
            <h2 class="text-center font-semibold text-2xl mb-8">Divisi Olah Rasa</h2>
            <div class="flex flex-wrap ukm-groups gap-8 justify-evenly items-center">
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/marching-band.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Marching Band</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/choir.jpeg" class="w-full" alt="">
                    <h3 class="m-4">ElJami'ah Choirs Club</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/dimensi.jpeg" class="w-full" alt="">
                    <h3 class="m-4">DIMENSI</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/hasta.jpg" class="w-full" alt="">
                    <h3 class="m-4">HASTA (Himpunan Mahasiswa Trampil Universitas Darussalam Gontor)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/khot.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Markaz Khat UNIDA Gontor</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/ilustrasi.jpeg" class="w-full" alt="">
                    <h3 class="m-4">TI (Tim Ilustrasi)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/thibbun.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Thibbun Nabawi</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/faroby.jpeg" class="w-full" alt="">
                    <h3 class="m-4">UKM Pramuka Racana Al Faraby</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        <hr class="border-secondary border-2 my-2">
        {{-- Olah Dzikir --}}
        <div class="divisi-card bg-primary text-secondary shadow-lg p-12">
            <h2 class="text-center font-semibold text-2xl mb-8">Divisi Olah Dzikir</h2>
            <div class="flex flex-wrap ukm-groups gap-8 justify-evenly items-center">
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/dzikrussalam.jpg" class="w-full" alt="">
                    <h3 class="m-4">Dzikrussalam Al Banjari</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>

            </div>
        </div>
        <hr class="border-secondary border-2 my-2">
        {{-- Olah Raga --}}
        <div class="divisi-card bg-primary text-secondary shadow-lg p-12">
            <h2 class="text-center font-semibold text-2xl mb-8">Divisi Olah Raga</h2>
            <div class="flex flex-wrap ukm-groups gap-8 justify-evenly items-center">
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/basket.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Cresta BBC (Basket Ball CLub)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/bola.jpeg" class="w-full" alt="">
                    <h3 class="m-4">UNIDA FC (Football Club)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/futsal.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Green Futsalisty</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/volly.jpeg" class="w-full" alt="">
                    <h3 class="m-4">Tirandaz VBC (Volly Ball Club)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/tenismeja.jpeg" class="w-full" alt="">
                    <h3 class="m-4">UTTC (UNIDA Table Tennis Club)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/badminton.jpeg" class="w-full" alt="">
                    <h3 class="m-4">PB UNIDA (Persatuan Badminton Universitas Darussalam Gontor)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/taekwondo.jpeg" class="w-full" alt="">
                    <h3 class="m-4">UTC (UNIDA Taekwondo CLub)</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/menwa.jpg" class="w-full" alt="">
                    <h3 class="m-4">Resimen Mahasiswa (MENWA) Satuan 884 Gagak Hitam</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
                <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                    <img src="/img/ukm/archery.jpeg" class="w-full" alt="">
                    <h3 class="m-4">UNIDA Archery Club</h3>
                    <a href=""
                        class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                        Untuk
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        <hr class="border-secondary border-2 my-2">
    </div>
@endsection
