@extends('layout.main')

@section('content')
<style>
    .perspective {
        perspective: 1000px;
    }

    .card-inner {
        transform-style: preserve-3d;
        transition: transform 0.7s ease-in-out;
    }

    .front-card,
    .back-card {
        backface-visibility: hidden;
    }

    .back-card {
        transform: rotateY(180deg);
    }

    .group:hover .card-inner {
        transform: rotateY(180deg);
    }

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
{{-- Departement --}}
<div class="departement-section text-primary">
    <div class="aurora-bg -z-10">
        <div class="aurora aurora-green from-dema/65 to-dema/35 top-[-10rem] left-[20%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[20rem] right-[85%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[-10rem] left-[70%]"></div>
    </div>
    <div class="departement max-w-7xl mx-auto py-16 px-10">
        <h1 class="text-5xl font-bold text-center mb-4">{{ $departement->nama }}</h1>

        <br>
        {{-- <div class="mx-auto flex justify-center">
            <img src="/img/publikasi_all.jpg" alt="" class="w-80">
        </div> --}}
        <br>

        @if ($departement->deskripsi != "")
        <p class="text-center max-w-2xl mx-auto">Deskripsi : {{ $departement->deskripsi}}</p>
        <br>
        @endif

        {{-- MEMBERS --}}
        <h3 class="text-xl font-semibold text-center">Who They Are:</h3>
        <br>
        <div class="members-departement flex flex-wrap justify-center gap-8">
            @foreach ($departement->members as $member)
            <div class="member-card group w-56 h-80 perspective" style="margin-bottom: 10rem">
                <div
                    class="card-inner relative w-full h-full transition-transform duration-700 transform group-hover:rotate-y-180">
                    {{-- Front Side --}}
                    <div class="front-card absolute w-full h-full backface-hidden">
                        <img src="{{ asset('storage/' . $member->image) }}" alt="" class="w-full h-full object-cover">
                        <div class="p-3 text-center">
                            <h4 class="font-semibold text-lg">{{ $member->nama }}</h4>
                            <p class="text-sm mt-1">{{ $member->prodi }}</p>
                        </div>
                    </div>
                    {{-- Back Side --}}
                    <div
                        class="back-card absolute w-full h-full bg-secondary p-3 text-center backface-hidden transform rotate-y-180 flex flex-col items-center justify-center">
                        <h4 class="font-semibold text-sm">{{ $member->nim }}</h4>
                        <h4 class="font-semibold text-lg">{{ $member->nama }}</h4>
                        <p class="text-sm mt-1">{{ $member->prodi }}</p>
                        <p class="text-sm">{{ $member->asal }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- PROKER --}}
        {{-- <br><br>
        <h3 class="text-xl font-semibold text-center">Program Kerja :</h3>
        <br>
        <div class="prokers-departement flex flex-wrap justify-center gap-4">
            <div class="proker-card border-2 border-secondary text-primary rounded-md overflow-hidden">
                <div class="p-2 text-center">
                    <h4 class="font-semibold text-lg">Naufal Harits</h4>
                    <p class="font-normal">Ketua</p>
                    <p class="font-normal text-xs">Teknik Informatika</p>
                    <p class="font-normal text-xs">Subang</p>
                </div>
            </div>

        </div> --}}
        {{-- PROKER --}}
    </div>
    <br><br><br><br>
</div>
@endsection
