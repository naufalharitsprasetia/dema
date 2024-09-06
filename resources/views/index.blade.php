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
    <div class="about-section"></div>
@endsection
