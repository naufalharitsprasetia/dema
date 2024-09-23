@extends('layout.main')

@section('content')
    {{-- ukm Us --}}
    <div class="ukm-section bg-secondary text-primary">
        <div class="ukm max-w-7xl mx-auto py-16 text-center ">
            <h1 class="text-5xl font-bold text-center">Unit Kegiatan Mahasiswa (UKM)</h1>
        </div>
        <div class="ukm background-primary px-4 py-3">
            <div class="breadcrumb"><a href="/lainnya"
                    class="text-decoration-none hover-breadcrumb tulisan-gelap fw-bold pe-2">Others </a> / UKM (putra)
            </div>
            <div class="title text-center">
                <h1 class="tulisan-gelap text-center fw-bolder">Unit Kegiatan Mahasiswa (UKM) - Unida Siman (Putra)</h1>
            </div>
            <hr>
            <div class="penjelasan-ukm p-4">
                <h2 class="fw-bold text-decoration-underline tulisan-gelap font-poppins"> APA ITU UKM ?</h2>
                <blockquote> Unit Kegiatan Mahasiswa (UKM) adalah organisasi mahasiswa santri yang dinaungi Dewan Mahasiswa
                    dalam
                    meningkatkan kesamaan minat, kegemaraan, kreativitas dan orientasi aktivitas penyaluran kegiatan
                    ekstrakulikuler didalam kampus </blockquote>
                <blockquote> UKM di UNIDA Gontor telah dikelompokkan kedalam 4 bidang yaitu Oleh Dzikir, Olah Fikir, Olah
                    Rasa
                    dan Olah
                    Raga. Sebagai kampus pesantren semua ini adalah salah satu upaya kampus dalam meningkatkan mutu
                    pembinaan
                    minat dan kegemaraan mahasiswa santri serta sebagai sarana dalam menjaga kesehatan rohani dan jasmani.
                    Keberagaman aktivitas dari setiap ukm dan 4 olah yang menjadi asas dari aktivitas tersebut telah
                    membentuk
                    ukm menjadi 22 unit kegiatan mahasiswa.</blockquote>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Olah Rasa
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Olah rasa</strong> kegiatan yang melatih
                                kemampuan mahasiswa dalam berkesenian dan berkebudayaan kemudian
                                dimanifestasikan menjadi sebuah mahakarya yang berkualitas. seni yang dilatih pun merupakan
                                seni
                                murni dan
                                seni terapan yang dapat dirasakan dari nilai keindahan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Olah Pikir
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Olah Fikir</strong> Olah fikir merupakan sebuah aktivitas yang membentuk mahasiswa
                                dalam
                                hal kenseptual, persepsi dan informasi,
                                dalam meningkatkan potensi berpendapat, dan menuliskan pikirannya dalam gagasan dan
                                kelimuannya.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Olah Dzikir
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Olah Dzikir</strong> Olah Dzikir merupakan unsur yang paling diutamakan dalam
                                kehidupan
                                mahasiswa untuk mengasah jiwa spritual, kegiatan ini bentuk integritas antara kegiatan
                                rohani
                                dan jasmani mahasiswa dengan menjadikan
                                nilai agama sebagai landasan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Olah Raga
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Olah Raga</strong> merupakan aktivitas jasmani yang
                                dilakukan untuk melatih kegiatan fisik secara terprogram dengan
                                tujuan meningkatkan keterampilan nilai-nilai fungsional yang mencakup aspek kognitif,
                                efektif,
                                dan sosial
                                bagi mahasiswa.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="divisi-card bg-primary text-secondary shadow-lg p-12 rounded-lg">
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
                        <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                        <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                        <a href=""
                            class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                            Untuk
                            Selengkapnya</a>
                    </div>
                    <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                        <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                        <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                        <a href=""
                            class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                            Untuk
                            Selengkapnya</a>
                    </div>
                    <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                        <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                        <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                        <a href=""
                            class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                            Untuk
                            Selengkapnya</a>
                    </div>
                    <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                        <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                        <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                        <a href=""
                            class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                            Untuk
                            Selengkapnya</a>
                    </div>
                    <div class="ukm-card bg-secondary text-primary rounded-lg overflow-hidden max-w-xs">
                        <img src="/img/ukm/luqmanulhakim.jpeg" class="w-full" alt="">
                        <h3 class="m-4">Lembaga Dakwah Kampus (LDK) Luqmanul Haqim</h3>
                        <a href=""
                            class="bg-primary text-secondary rounded-md flex text-center mx-4 mb-2 mt-5 px-3 py-2">Klik
                            Untuk
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
