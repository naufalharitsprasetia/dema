@extends('layout.main')

@section('content')
    {{-- Departement --}}
    <div class="departement-section bg-gray-50 text-primary">
        <div class="departement max-w-7xl mx-auto py-16 px-10">
            <h1 class="text-5xl font-bold text-center mb-4">{{ $departement->nama }}</h1>

            <br>
            <div class="mx-auto flex justify-center">
                <img src="/img/publikasi_all.jpg" alt="" class="w-80">
            </div>
            <br>

            <p class="text-center max-w-2xl mx-auto">Deskripsi : Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rerum, saepe
                eum
                natus vero facere adipisci esse dicta voluptates cum vel.</p>
            <br>
            {{-- MEMBERS --}}
            <h3 class="text-xl font-semibold text-center">Anggota Departement :</h3>
            <br>
            <div class="members-departement flex flex-wrap justify-center gap-4">
                @for ($i = 0; $i < 8; $i++)
                    <div class="member-card border-2 border-secondary text-primary rounded-md overflow-hidden">
                        <img src="/img/defaultmember.jpg" alt="" class="w-40">
                        <div class="p-2 text-center">
                            <h4 class="font-semibold text-lg">Naufal Harits</h4>
                            <p class="font-normal">Ketua</p>
                            <p class="font-normal text-xs">Teknik Informatika</p>
                            <p class="font-normal text-xs">Subang</p>
                        </div>
                    </div>
                @endfor
            </div>

            {{-- PROKER --}}
            <br><br>
            <h3 class="text-xl font-semibold text-center">Program Kerja :</h3>
            <br>
            <div class="prokers-departement flex flex-wrap justify-center gap-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="proker-card border-2 border-secondary text-primary rounded-md overflow-hidden">
                        <div class="p-2 text-center">
                            <h4 class="font-semibold text-lg">Naufal Harits</h4>
                            <p class="font-normal">Ketua</p>
                            <p class="font-normal text-xs">Teknik Informatika</p>
                            <p class="font-normal text-xs">Subang</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
