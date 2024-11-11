@extends('layout.main')

@section('content')
    {{-- Hero Section (ABOUT US) --}}
    <div class="min-h-svh bg-center flex justify-center items-center"
        style="background-image: url('/img/unidabg.jpg'); background-size: cover; background-repeat: no-repeat">
        <img class="w-[34rem]" src="/img/abouthadisatya.png" alt="">
    </div>
    {{-- Tentang Dema Section --}}
    <div class="about-section bg-gray-50 text-primary">
        <div class="about flex flex-col lg:flex-row max-w-7xl mx-auto px-12 py-16">
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
    {{-- Visi Misi Section --}}
    <div class="visimisi-section bg-gray-50 text-primary">
        <div class="visimisi flex flex-wrap md:flex-nowrap mx-auto max-w-7xl px-12 py-16">
            <div class="visi px-8">
                <h2 class="font-semibold text-xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Visi
                </h2>
                <p class="text-[16px]">Menjadikan Dewan Mahasiswa Universitas Darussalam Gontor sebagai wadah inklusif yang
                    berperan inspiratif,
                    inklusif, dan inovatif dalam membangun karakter, kompetensi, dan kontribusi mahasiswa, guna menciptakan
                    generasi pemimpin yang berintegritas, berwawasan luas, dan berkomitmen pada nilai-nilai Islami.</p>
            </div>
            <div class="misi mt-4 md:mt-0 px-8">
                <h2 class="font-semibold text-xl bg-primary text-secondary inline-block px-5 py-3 rounded-lg mb-5">Misi
                </h2>
                <ul class="text-[16px]">
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
    {{-- Struktur Dema Section --}}
    <div class="struktur-section bg-gray-50">
        <div class="struktur mx-auto text-center mx-auto max-w-7xl px-12 py-16">
            <h1 class="text-5xl font-bold text-center">Struktur</h1>
            <br>
            <img src="/img/strukturdema.png" alt="">
        </div>
    </div>
@endsection
