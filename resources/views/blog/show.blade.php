@extends('layout.main')
@php
    \Carbon\Carbon::setLocale('id');
@endphp
@section('content')
    {{-- Artikels --}}
    <div class="artikel-section bg-secondary text-primary">
        <div class="artikel max-w-7xl mx-auto py-12 pb-6">
            <p class="mb-8 px-4"><a href="/blog" class="underline font-semibold">Articles</a> / {{ $blog->judul }}</p>
            {{-- card artikel --}}
            <div class="halaman-artikel px-4">
                @auth
                    <div class="auht-only my-5">
                        <div class="">
                            <a href="/blog/{{ $blog->id }}"
                                class="bg-blue-500 text-white px-2 py-1 text-sm rounded mr-2">Detail</a>
                            <a href="/blog-edit/{{ $blog->id }}"
                                class="bg-yellow-500 text-white px-2 py-1 text-sm rounded mr-2">Edit</a>
                            <form action="/blog-delete/{{ $blog->id }}" method="POST" class="inline-block"
                                id="formDelete-1">
                                @method('delete')
                                @csrf
                                <button type="button" onclick="deleteConfirm(1)"
                                    class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                            </form>
                            <p class="mx-2 my-2 text-sm">(Hanya Tampil Ketika Login Sebagai Admin)</p>
                        </div>
                    </div>
                @endauth
                <h1 class="text-5xl font-bold text-center">{{ $blog->judul }}</h1>
                <p class="text-sm text-center mb-5">
                    {{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('l, j M Y H:i') }} WIB</p>
                <img class="w-[500px] mb-4 object-cover object-center origin-center self-center text-center mx-auto"
                    src="/img/artikel2.png" alt="">
                {{-- <hr class="border-2 my-1 border-primary"> --}}
                <p class="text-lg font-medium indent-8 mt-5">{!! $blog->isi !!}</p>
                <br>
                <p class="text-sm">Oleh : {{ $blog->user->name }}</p>
                <hr class="border-2 my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="{{ $blog->link_dokumentasi }}" target="_blank"
                        class="underline">Klik Disini</a></p>
            </div>
        </div>
    </div>
    </div>
@endsection
