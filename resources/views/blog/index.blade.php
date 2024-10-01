@extends('layout.main')

@section('content')
    {{-- Artikel Index --}}
    <div class="artikel-section bg-secondary text-primary">
        <div class="artikel max-w-7xl mx-auto py-12 pb-6 text-center ">
            <h1 class="text-5xl font-bold text-center">PRESS RELEASE</h1>
        </div>
        {{-- Artikel Section --}}
        <div class="artikel-section bg-secondary text-primary">
            <div
                class="max-w-7xl px-12 pt-4 pb-12 mx-auto w-full flex flex-wrap pl-8 border-l-4 border-secondary justify-center items-center">
                @foreach ($blogs as $blog)
                    {{-- card artikel --}}
                    <a class="hover:bg-third/80 rounded-lg p-2" href="/blog/{{ $blog->id }}">
                        <div class="card-artikel text-center">
                            <img class="w-[300px] h-[200px] rounded-lg mb-4" src="{{ asset('storage/' . $blog->image) }}"
                                alt="{{ $blog->judul }}">
                            <span class="font-semibold text-xl mt-3">{{ $blog->judul }}</span>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
@endsection
