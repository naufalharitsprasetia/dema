@extends('layout.main')

@section('content')
    {{-- DEPARTEMENT index --}}
    <div class="departement-section text-secondary" style="background: linear-gradient(120deg, #0065A9 0%, #002843 87.07%);">
        <div class="departement max-w-7xl mx-auto py-16 text-center ">
            <h1 class="text-5xl font-bold text-center">Our Departements</h1>
            <div class="divisons-group mt-5 font-poppins mx-28">
                {{-- PerDivisi --}}
                <div class="divisi mb-8 bph">
                    <h2 class="text-left mb-2 text-lg font-semibold">Badan <span class="text-seventh">Pengurus Harian</span>
                    </h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Ketua Dewan
                            Mahasiswa</a>
                        <a href=""
                            class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Sekretaris</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Bendahara</a>
                    </div>
                </div>
                {{-- kemahasiswaan --}}
                <div class="divisi mb-8 kemahasiswaan">
                    <h2 class="text-left mb-2 text-lg font-semibold">Divisi <span class="text-seventh">Kemahasiswaan</span>
                    </h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Pertahanan</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            PSDM</a>
                    </div>
                </div>
                {{-- Keilmuan --}}
                <div class="divisi mb-8 keilmuan">
                    <h2 class="text-left mb-2 text-lg font-semibold">Divisi <span class="text-seventh">Keilmuan</span>
                    </h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Riset & Diskusi</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Bahasa</a>
                    </div>
                </div>
                {{-- Divisi Minat dan Bakat --}}
                <div class="divisi mb-8 minatbakat">
                    <h2 class="text-left mb-2 text-lg font-semibold">Divisi <span class="text-seventh">Minat & Bakat</span>
                    </h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Olahraga</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Kesenian</a>
                    </div>
                </div>
                {{-- Divisi Eksternal --}}
                <div class="divisi mb-8 eksternal">
                    <h2 class="text-left mb-2 text-lg font-semibold">Divisi <span class="text-seventh">Eksternal</span>
                    </h2>
                    <div class="flex flex-wrap md:flex-nowrap gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Pers & Publikasi</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Departemen
                            Eksternal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
