@extends('layout.main')

@section('content')
    {{-- About Us --}}
    <div class="about-section bg-third text-white">
        <div class="about max-w-7xl mx-auto py-16 text-center px-12">
            <h1 class="text-5xl font-bold">Frequenlty Asked Question (FAQ)</h1>
            <p class="text-xl mt-4">Hal-hal yang sering menjadi pertanyaan khalayak.</p>
            {{-- Faqs --}}
            <div class="faqs-group mt-8 flex flex-col justify-center items-center">
                {{-- faq card --}}
                <div class="faq-card my-4 py-8 px-4 rounded-lg flex shadow-lg border-2 border-slate-900">
                    <div class="px-8 flex items-center justify-center">
                        <img class="w-20" src="/img/faqmin.png" alt="">
                    </div>
                    <div class="text-left">
                        <h2 class="font-semibold text-xl">Apa itu DEMA UNIDA? </h2>
                        <p class="mt-3">Dema UNIDA adalah It is a long established fact that a reader will be distracted
                            by the readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using</p>
                    </div>
                </div>
                {{-- plus --}}
                <div class="faq-card my-4 py-8 px-4 rounded-lg flex items-center shadow-lg border-2 border-slate-900">
                    <div class="px-4 flex items-center justify-center">
                        <img class="w-10" src="/img/faqplus.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="font-semibold text-xl">Apakah UNIDA mempunyai layanan konsultasi Psikolog? </h2>
                    </div>
                </div>
                <div class="faq-card my-4 py-8 px-4 rounded-lg flex items-center shadow-lg border-2 border-slate-900">
                    <div class="px-4 flex items-center justify-center">
                        <img class="w-10" src="/img/faqplus.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="font-semibold text-xl">Bagaimana cara menghubungi DEMA UNIDA? </h2>
                    </div>
                </div>
                <div class="faq-card my-4 py-8 px-4 rounded-lg flex items-center shadow-lg border-2 border-slate-900">
                    <div class="px-4 flex items-center justify-center">
                        <img class="w-10" src="/img/faqplus.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="font-semibold text-xl">Bagaimana cara bergabung dengan DEMA UNIDA? </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
