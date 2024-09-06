@extends('layout.main')

@section('content')
    {{-- First Section --}}
    <div class="min-h-svh text-center flex flex-col justify-center items-center bg-center"
        style="background-image: url('/img/demabg.png'); background-size: cover; background-repeat: no-repeat">
        {{-- <div class="mx-auto">
            <img class="w-96 mt-8" src="/img/logodema.png" alt="">
        </div> --}}
        <span class="mt-6 text-[#16aebc] uppercase text-base">Website Resmi</span>
        <hr class="border-1 border-[#16aebc] w-2/12 mx-auto">
        <h1 class="mt-2 text-[#16aebc] font-trajanBold font-bold uppercase text-5xl">DEMA Unida Gontor</h1>
        <h2 class="mt-2 text-[#16aebc] font-trajan font-semibold uppercase text-lg">Kabinet Hadisatya 2024-2025</h3>
    </div>
    {{-- Second Section --}}
    <div class="about-section bg-gray-800">
        <div class="about flex max-w-7xl mx-auto px-12 py-16 text-white">
            <div class="logo-about w-full flex items-center justify-center px-10">
                <img class="" src="/img/logodema.png" alt="">
            </div>
            <div class="text-about">
                <h2 class="font-semibold text-3xl">Tentang DEMA</h2>
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
    <div class="visimisi-section">
        <div class="visimisi flex mx-auto max-w-7xl px-12 py-16">
            <div class="visi px-8">
                <h2 class="font-semibold text-3xl">Visi</h2>
                <p>Menjadikan Dewan Mahasiswa Universitas Darussalam Gontor sebagai wadah inklusif yang berperan inspiratif,
                    inklusif, dan inovatif dalam membangun karakter, kompetensi, dan kontribusi mahasiswa, guna menciptakan
                    generasi pemimpin yang berintegritas, berwawasan luas, dan berkomitmen pada nilai-nilai Islami.</p>
            </div>
            <div class="misi px-8">
                <h2 class="font-semibold text-3xl">Misi</h2>
                <ul>
                    <li>- Membangun lingkungan yang kondusif bagi seluruh mahasiswa untuk mengembangkan potensi secara
                        optimal, baik dalam aspek intelektual, spiritual, maupun sosial, sehingga dapat menjadi pemimpin
                        yang inspiratif dan membawa perubahan positif bagi lingkungan.
                    </li>
                    <li>- Membangun mahasiswa Universitas Darussalam Gontor sebagai individu yang unggul dan berdaya saing
                        melalui pengembangan jejaring antar kampus, baik di tingkat nasional maupun internasional, sebagai
                        dukungan terhadap misi internasionalisasi kampus pada tingkat (world-class university) dan
                        memperluas eksistensi mahasiswa di berbagai kancah global.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Fourth Section --}}
    <div class="artikel-section bg-gray-200">
        <div class="artikel max-w-7xl px-12 py-16 mx-auto">
            <div class="heading-artikel text-center">
                <h2 class="font-semibold text-3xl">PRESS RELEASE</h2>
            </div>
            <div class="artikel-box">
                {{-- card artikel --}}
                <div class="card-artikel">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
