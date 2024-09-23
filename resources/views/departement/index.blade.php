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
                    <div class="flex gap-4 justify-around">
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
                    <div class="flex gap-4 justify-around">
                        <a href=""
                            class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Pertahanan</a>
                        <a href=""
                            class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Kerohanian</a>
                    </div>
                </div>
                <div class="divisi mb-8 bph">
                    <h2 class="text-left mb-2 text-lg font-semibold">Badan <span class="text-seventh">Pengurus Harian</span>
                    </h2>
                    <div class="flex gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Ketua Dewan
                            Mahasiswa</a>
                        <a href=""
                            class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Sekretaris</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Bendahara</a>
                    </div>
                </div>
                <div class="divisi mb-8 bph">
                    <h2 class="text-left mb-2 text-lg font-semibold">Badan <span class="text-seventh">Pengurus Harian</span>
                    </h2>
                    <div class="flex gap-4 justify-around">
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Ketua Dewan
                            Mahasiswa</a>
                        <a href=""
                            class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Sekretaris</a>
                        <a href="" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">Bendahara</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
