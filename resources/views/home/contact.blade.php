@extends('layout.main')

@section('content')
    {{-- contact Us --}}
    <div class="contact-section bg-secondary text-primary">
        <div class="contact max-w-7xl mx-auto py-16 px-14 flex">
            <div class="kiri-contact w-full">
                <h2 class="text-4xl font-bold mb-4">Kontak Kami</h2>
                <p class="text-xl">Daftar Kontak Yang Bisa di Hubungi : </p>
                <div class="flex flex-col mt-8">
                    <div class="flex py-6 px-2 items-center">
                        <img class="w-14 p-2 mr-4 bg-primary rounded-full" src="/img/gmaps.png" alt="">
                        <p class="font-medium text-lg">Jl. Raya Siman, Dusun I, Demangan,
                            Kec. Siman, Kabupaten Ponorogo,
                            Jawa Timur 63471</p>
                    </div>
                    <div class="flex py-6 px-2 items-center">
                        <img class="w-14 p-2 mr-4 bg-primary rounded-full" src="/img/gmail.png" alt="">
                        <p class="font-medium text-lg">demasiman@unida.gontor.ac.id</p>
                    </div>
                    <div class="flex py-6 px-2 items-center">
                        <img class="w-14 p-2 mr-4 bg-primary rounded-full" src="/img/telepon.png" alt="">
                        <p class="font-medium text-lg">+62 123 4567 8900</p>
                    </div>
                </div>
            </div>
            <div class="kanan-contact w-full">
                <h2 class="text-4xl font-bold mb-4">Kirim Sebuah Surat</h2>
                <p class="text-xl">Anda bisa mengirim surat atau pesan dari sini.</p>
                {{-- Form --}}
                <form action="" class="flex flex-col">
                    <div class="input-group flex">
                        <div class="flex flex-col input-div w-full">
                            <label for="nama" class="font-semibold">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="p-2 w-full border-2 border-primary bg-secondary rounded-md"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="flex flex-col input-div w-full ml-4">
                            <label for="email" class="font-semibold">Email</label>
                            <input type="email" name="email" id="email"
                                class="p-2 w-full border-2 border-primary bg-secondary rounded-md"
                                placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="flex flex-col input-pesan mt-2">
                        <label for="pesan" class="font-semibold">Pesan</label>
                        <textarea class="p-2 border-2 border-primary bg-secondary rounded-md" name="pesan" id="pesan" cols="30"
                            rows="10" placeholder="Pesan yang ingin disampaikan"></textarea>
                    </div>
                    <button type="button" class="text-white bg-sixth px-4 py-2 font-semibold text-xl mt-4 rounded-lg">Kirim
                        Pesan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
