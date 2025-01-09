@extends('layout.main')
@php
\Carbon\Carbon::setLocale('id');
@endphp
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
{{-- Artikels --}}
<div class="artikel-section text-primary">
    <div class="aurora-bg -z-10">
        <div class="aurora aurora-green from-dema/65 to-dema/35 top-[-10rem] left-[20%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[20rem] right-[85%]"></div>
        <div class="aurora aurora-green from-dema/65 to-dema/35 bottom-[-10rem] left-[70%]"></div>
    </div>
    <div class="artikel max-w-7xl mx-auto py-12 pb-6">
        <p class="mb-4 px-4 text-center"><a href="/blog" class="font-bold">Articles</a> /
            DEMA</p>
        {{-- card artikel --}}
        <div class="halaman-artikel px-4">
            @auth
            <div class="auht-only my-5">
                <div class="">
                    <a href="/blog/{{ $blog->id }}" class="bg-blue-500 text-white px-2 py-1 text-sm rounded mr-2">Detail</a>
                    <a href="/blog-edit/{{ $blog->id }}" class="bg-yellow-500 text-white px-2 py-1 text-sm rounded mr-2">Edit</a>
                    <form action="/blog-delete/{{ $blog->id }}" method="POST" class="inline-block" id="formDelete-1">
                        @method('delete')
                        @csrf
                        <button type="button" onclick="deleteConfirm(1)" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                    </form>
                    <p class="mx-2 my-2 text-sm">(Hanya Tampil Ketika Login Sebagai Admin)</p>
                </div>
            </div>
            @endauth
            <h1 class="text-4xl font-bold text-center my-2">{{ $blog->judul }}</h1>
            <br>
            {{-- <p class="text-sm text-center mb-5">
                    {{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('l, j M Y H:i') }} WIB</p> --}}
            <img class="w-[600px] h-[400px] mb-4 object-cover transform transition-transform object-center origin-center self-center text-center mx-auto" src="{{ asset('storage/' . $blog->image) }}" alt="">
            {{-- <hr class="border-2 my-1 border-primary"> --}}
            <div class="px-16">
                <p class="text-lg font-medium indent-8 mt-5">{!! $blog->isi !!}</p>
                <br>
                <p class="text-sm">{{ $blog->user->name }}</p>
                <hr class="border my-1 border-primary">
                <p class="text-sm">Link Dokumentasi : <a href="{{ $blog->link_dokumentasi }}" target="_blank" class="underline">Klik Disini</a></p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
