@extends('layout.main')

@section('content')
<style>
    .aurora-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        /* overflow: hidden; */
    }

    .aurora {
        position: absolute;
        width: 30rem;
        height: 30rem;
        background: radial-gradient(circle, var(--tw-gradient-from), var(--tw-gradient-to));
        opacity: 0.2;
        filter: blur(100px);
        border-radius: 9999px;
    }

</style>
{{-- DEPARTEMENT index --}}
<div class="departement-section text-primary">
    {{-- Aurora --}}
    <div class="aurora-bg -z-10">
        <div class="aurora aurora-green from-dema/65 to-dema/35 top-[-10rem] left-[20%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[20rem] right-[85%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[-10rem] left-[70%]"></div>
    </div>
    <div class="departement max-w-7xl mx-auto py-16 text-center ">
        <h1 class="text-5xl font-bold text-center">Our Departements</h1>
        <div class="divisons-group mt-5 font-poppins mx-28">
            @foreach ($divisions as $division)
            {{-- Per Divisi --}}
            <div class="divisi mb-8">
                <h2 class="text-left mb-2 text-lg font-semibold">
                    @php
                    // Pisahkan kata pertama
                    $words = explode(' ', $division->nama);
                    $firstWord = $words[0];
                    $remainingWords = implode(' ', array_slice($words, 1));
                    @endphp
                    <span class="text-third">{{ $loop->iteration }}. {{ $firstWord }}</span> {{ $remainingWords }}
                </h2>
                <div class="flex flex-wrap md:flex-nowrap gap-4 ">
                    @foreach ($division->departements as $departement)
                    <a href="/departement/{{ $departement->id }}" class="rounded-xl bg-secondary text-primary font-semibold px-8 py-3">{{ $departement->nama }}</a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
