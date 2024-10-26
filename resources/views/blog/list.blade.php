@extends('layout.main')

@section('content')
    <div class="pt-6 pb-4 px-6 bg-wa4">
        <div class="mx-auto max-w-7xl">
            <h1 class="block text-4xl font-bold font-trajan text-wa1 text-center tracking-widest py-2 px-2">
                Artikels
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
        <div class="mb-2 flex items-center" id="blog">
            <form action="">
                <label for="perPageB" class="mr-2">Menampilkan</label>
                <select id="perPageB" name="perPageB" onchange="this.form.submit()"
                    class="border border-gray-300 rounded form-select">
                    <option value="5" {{ Request::get('perPageB') == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ Request::get('perPageB') == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ Request::get('perPageB') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ Request::get('perPageB') == 50 ? 'selected' : '' }}>50</option>
                </select>
                <span class="ml-2">data</span>
            </form>
        </div>
        <div class="showing-total mb-4">
            {{-- <p class="text-base font-semibold">Total Artikels : {{ $blogs->total() }}</p> --}}
            <p class="text-base font-semibold">Total Artikels : {{ count($blogs) }}</p>
        </div>
        <!-- Table -->
        <div class="table-blog overflow-x-auto rounded-md bg-slate-200 px-4 py-3">
            <div class="mb-4">
                <input type="text" id="search" placeholder="Cari blog..."
                    class="border border-gray-300 rounded p-2 w-full" onkeyup="searchblog()">
            </div>

            <table class="min-w-full text-sm md:text-base bg-white border border-gray-300">
                <thead>
                    <tr class="text-left">
                        <th class="py-2 md:px-4 border-b border-r text-center">No</th>
                        <th class="py-2 px-4 border-b border-r">Judul Artikel</th>
                        <th class="py-2 md:px-4 border-b border-r text-center">Isi</th>
                        @auth
                            <th class="py-2 px-4 border-b border-r">Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody id="blog-table-body">
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="py-2 md:px-4 border-b border-r text-center">
                                {{ $loop->iteration + ($blogs->currentPage() - 1) * $blogs->perPage() }}</td>
                            <td class="py-2 px-4 border-b border-r">
                                <div class="">{{ $blog->judul }}
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-r line-clamp-5">
                                <div class="">
                                    {!! $blog->isi !!}
                                </div>
                            </td>
                            @auth
                                <td class="py-2 px-4 border-b border-r ">
                                    <div class="flex">
                                        <a href="/blog/{{ $blog->id }}"
                                            class="bg-blue-500 text-white px-2 py-1 text-sm rounded mr-2">Detail</a>
                                        <a href="/blog-edit/{{ $blog->id }}"
                                            class="bg-yellow-500 text-white px-2 py-1 text-sm rounded mr-2">Edit</a>
                                        <form action="/blog-delete/{{ $blog->id }}" method="POST" class="inline-block"
                                            id="formDelete-{{ $loop->iteration }}">
                                            @method('delete')
                                            @csrf
                                            <button type="button" onclick="deleteConfirm({{ $loop->iteration }})"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $blogs->withQueryString()->links() }}
            </div>
        </div>
        <!-- end Table -->
    </div>

    <script>
        function searchblog() {
            const search = document.getElementById('search').value;
            const perPageB = document.getElementById('perPageB').value;

            fetch(`/blog?search=${search}&perPageB=${perPageB}`)
                .then(response => response.text())
                .then(data => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, 'text/html');
                    const tableBody = doc.getElementById('blog-table-body').innerHTML;
                    document.getElementById('blog-table-body').innerHTML = tableBody;
                });
        }
    </script>
@endsection
