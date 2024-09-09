@extends('layout.main')

@section('content')
    {{-- contact Us --}}
    <div class="contact-section bg-secondary text-primary">
        <div class="contact max-w-7xl mx-auto py-16 flex">
            <div class="kiri-contact">
                <h2 class="text-4xl font-bold">Kontak Kami</h2>
                <p class="text-xl">Daftar Kontak Yang Bisa di Hubungi : </p>
                <div class="flex flex-col">
                    <div class="flex">
                        <img class="" src="" alt="">
                        <p class="">Jl. Raya Siman, Dusun I, Demangan,
                            Kec. Siman, Kabupaten Ponorogo,
                            Jawa Timur 63471</p>
                    </div>
                    <div class="flex">
                        <img class="" src="" alt="">
                        <p class="">demasiman@unida.gontor.ac.id</p>
                    </div>
                    <div class="flex">
                        <img class="" src="" alt="">
                        <p class="">+62 123 4567 8900</p>
                    </div>
                </div>
            </div>
            <div class="kanan-contact">
                <h2 class="text-4xl font-bold">Kirim Sebuah Surat</h2>
                <p class="text-xl">Anda bisa mengirim surat atau pesan dari sini.</p>
                {{-- Form --}}
                <form action="">

                </form>
            </div>
        </div>
    </div>
@endsection
