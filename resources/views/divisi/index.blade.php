@extends('layout.main')

@section('content')
    <div class="pt-6 pb-4 px-6 bg-wa4">
        <div class="mx-auto max-w-7xl">
            <h1 class="block text-4xl font-bold font-trajan text-wa1 text-center tracking-widest py-2 px-2">
                List Divisi
            </h1>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="alert alert-success col-lg-12 mt-4" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="mx-auto max-w-7xl">
            <div class="alert alert-error col-lg-12 mt-4" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif
    <div class="mx-6 md:mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="showing-total mb-4">
            {{-- <p class="text-base font-semibold">Total Artikels : {{ $divisis->total() }}</p> --}}
            <p class="text-base font-semibold">Total Divisi : {{ count($divisions) }}</p>
        </div>
        <!-- Table -->
        <div class="table-divisi overflow-x-auto rounded-md bg-slate-200 px-4 py-3">
            <table class="min-w-full text-sm md:text-base bg-white border border-gray-300">
                <thead>
                    <tr class="text-left">
                        <th class="py-2 md:px-4 border-b border-r text-center">No</th>
                        <th class="py-2 px-4 border-b border-r">Divisi</th>
                        <th class="py-2 md:px-4 border-b border-r text-center">Urutan</th>
                        <th class="py-2 md:px-4 border-b border-r text-center">Singkatan</th>
                        <th class="py-2 md:px-4 border-b border-r text-center">Deskripsi</th>
                        @auth
                            <th class="py-2 px-4 border-b border-r">Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody id="divisi-table-body">
                    @foreach ($divisions as $divisi)
                        <tr>
                            <td class="py-2 md:px-4 border-b border-r text-center">
                                {{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b border-r">
                                {{ $divisi->nama }}
                            </td>
                            <td class="py-2 px-4 border-b border-r">
                                {{ $divisi->urutan }}
                            </td>
                            <td class="py-2 px-4 border-b border-r">
                                {{ $divisi->singkatan }}
                            </td>
                            <td class="py-2 px-4 border-b border-r">
                                {{ $divisi->deskripsi }}
                            </td>
                            @auth
                                <td class="py-2 px-4 border-b border-r ">
                                    <div class="flex">
                                        <a href="/divisi/{{ $divisi->id }}"
                                            class="bg-blue-500 text-white px-2 py-1 text-sm rounded-sm mr-2">Detail</a>
                                        <a href="/divisi-edit/{{ $divisi->id }}"
                                            class="bg-yellow-500 text-white px-2 py-1 text-sm rounded-sm mr-2">Edit</a>
                                        <form action="/divisi-delete/{{ $divisi->id }}" method="POST" class="inline-block"
                                            id="formDelete-{{ $loop->iteration }}">
                                            @method('delete')
                                            @csrf
                                            <button type="button" onclick="deleteConfirm({{ $loop->iteration }})"
                                                class="bg-red-500 text-white px-2 py-1 rounded-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end Table -->
    </div>
@endsection
