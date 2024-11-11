@extends('layout.main')

@section('content')
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Create Divisi</h1>

        <div class="mx-4 md:mx-6 lg:mx-16 bg-slate-200 p-4 md:p-8  rounded-lg shadow-lg">
            @if ($errors->any())
                <div class="mx-auto max-w-7xl">
                    <div class="alert alert-error col-lg-12 mt-4" role="alert">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="/divisi-create" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Divisi:</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('nama', $division->nama) }}" required>
                </div>

                <div class="mb-4">
                    <label for="urutan" class="block text-gray-700 font-bold mb-2">Urutan:</label>
                    <input type="number" id="urutan" name="urutan"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('urutan', $division->urutan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi Divisi:</label>
                    <input type="text" id="deskripsi" name="deskripsi"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('deskripsi', $division->deskripsi) }}" required>
                </div>

                <div class="mb-4">
                    <label for="singaktan" class="block text-gray-700 font-bold mb-2">Singaktan:</label>
                    <input type="text" id="singaktan" name="singaktan"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('singaktan', $division->singkatan) }}" required>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
