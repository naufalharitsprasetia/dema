@extends('layout.main')

@section('content')
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 min-h-svh">
        <h1 class="mt-8 text-3xl font-bold font-trajan text-primary mb-6 ml-8 text-center">Admin Dashboard
            ({{ auth()->user()->name }})</h1>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 mt-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Blog Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-blue-500 bg-blue-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm10 3a1 1 0 10-2 0v4a1 1 0 102 0V6zm-4 0a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Artikel</p>
                        <p class="text-2xl font-bold">{{ count($blogs) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/blog-create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 block">Buat
                        Artikel Baru</a>
                    <a href="/blog-list" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Artikel</a>
                </div>
            </div>

            <!-- Ayat Card -->
            {{-- <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-green-500 bg-green-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm4-8H6a1 1 0 000 2h8a1 1 0 000-2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Ayat Tafsir Sains</p>
                        <p class="text-2xl font-bold">{{ count($ayats) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/ayat-create"
                        class="bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded block">Tambahkan
                        Ayat Baru</a>
                    <a href="/ayat" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Ayat</a>
                </div>
            </div> --}}


            <!-- AYAT_TEMA  Card -->
            {{-- <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-purple-500 bg-purple-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm8 3a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Hubungan Ayat dengan Tema</p>
                        <p class="text-2xl font-bold">{{ $hubungan }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/ayat-tema/create"
                        class="bg-purple-500 hover:bg-purple-700 text-white px-4 py-2 rounded block">Buat
                        Hubungan</a>
                    <a href="/ayat-tema" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Hubungan</a>
                </div>
            </div> --}}

            <!-- Masukkan Card -->
            {{-- <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-red-500 bg-red-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm8 3a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Masukkan Kritik Dan Saran</p>
                        <p class="text-2xl font-bold">{{ count($masukkans) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/masukkan" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded block">List
                        Masukkan</a>
                </div>
            </div> --}}

        </div>
    </div>
@endsection
