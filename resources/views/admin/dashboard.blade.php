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

            <!-- Divisi Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-red-500 bg-red-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm10 3a1 1 0 10-2 0v4a1 1 0 102 0V6zm-4 0a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Divisi</p>
                        <p class="text-2xl font-bold">{{ count($divisions) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/divisi-create" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 block">Buat
                        Divisi Baru</a>
                    <a href="/divisi" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Divisi</a>
                </div>
            </div>

            <!-- Departement Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-green-500 bg-green-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm10 3a1 1 0 10-2 0v4a1 1 0 102 0V6zm-4 0a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Departement</p>
                        <p class="text-2xl font-bold">{{ count($departements) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/departement-create"
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 block">Buat
                        Departement Baru</a>
                    <a href="/departement-list"
                        class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Departements</a>
                </div>
            </div>

            <!-- Anggota Departement Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-violet-500 bg-violet-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm10 3a1 1 0 10-2 0v4a1 1 0 102 0V6zm-4 0a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah Anggota Departement</p>
                        <p class="text-2xl font-bold">{{ count($anggota_departements) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/anggota_departement-create"
                        class="bg-violet-500 text-white px-4 py-2 rounded hover:bg-violet-700 block">Buat
                        Anggota Departement Baru</a>
                    <a href="/anggota_departement"
                        class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        Anggota Departement</a>
                </div>
            </div>

            <!-- UKM Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-yellow-500 bg-yellow-100 p-4 rounded-full">
                        <!-- Icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm10 3a1 1 0 10-2 0v4a1 1 0 102 0V6zm-4 0a1 1 0 10-2 0v4a1 1 0 102 0V6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600">Jumlah UKM</p>
                        <p class="text-2xl font-bold">{{ count($ukms) }}</p>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="/ukm-create" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 block">Buat
                        UKM Baru</a>
                    <a href="/ukm-list" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block">List
                        UKM</a>
                </div>
            </div>


        </div>
    </div>
@endsection
