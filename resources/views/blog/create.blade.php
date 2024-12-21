@extends('layout.main')

@push('styles')
    {{-- <link rel="stylesheet" href="./ckeditor/ckeditor.css"> --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css" />
@endpush
{{-- @push('scripts')
    <script type="module" src="./ckeditor/ckeditor.js"></script>
@endpush --}}


@section('content')
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Create Artikel</h1>

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
            <form action="/blog-create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-bold mb-2">Judul (max 25 karakter termasuk
                        spasi):</label>
                    <input type="text" id="judul" name="judul"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('judul') }}" required maxlength="25">
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Gambar Utama (Max:5MB):</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <label for="isi" class="block text-gray-700 font-bold mb-2">Isi :</label>
                <div class="mb-4 bg-white">
                    {{-- Editor --}}
                    <div>
                        <div class="main-container">
                            <div class="editor-container editor-container_classic-editor" id="editor-container">
                                <div class="editor-container__editor">
                                    <textarea name="isi" id="editor">{{ old('isi') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Link --}}
                <div class="mb-4">
                    <label for="link_dokumentasi" class="block text-gray-700 font-bold mb-2">Link Dokumentasi:</label>
                    <input type="text" id="link_dokumentasi" name="link_dokumentasi"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('link_dokumentasi') }}">
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
    <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.1/"
                }
            }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        ClassicEditor.create(document.querySelector("#editor"), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .then((editor) => {
                editor.setData(document.querySelector("#editor").value);
                console.log("Editor 1 is ready", editor);
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
@endsection
