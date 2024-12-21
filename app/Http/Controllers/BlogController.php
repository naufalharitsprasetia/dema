<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'blog';

        // Ambil 2 data terbaru untuk $beritaUtama dengan Eloquent agar bisa menggunakan relasi
        $beritaUtama = Blog::with('user')->orderBy('created_at', 'desc')->limit(2)->get();

        // Ambil sisa data setelah 2 data terbaru untuk $blogs dengan Query Builder
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->offset(2)->limit(PHP_INT_MAX)->get();

        // Pisahkan $beritaUtama menjadi $beritaUtama1 dan $beritaUtama2
        $beritaUtama1 = $beritaUtama[0] ?? null;
        $beritaUtama2 = $beritaUtama[1] ?? null;

        return view('blog.index', compact('active', 'blogs', 'beritaUtama1', 'beritaUtama2'));
    }


    public function list(Request $request)
    {
        $active = 'blog';
        $perPageBlog = $request->input('perPageBlog', 25);
        $search = $request->input('search');

        $userId = auth()->user()->id;
        $query = Blog::where('user_id', $userId)->orderBy('created_at', 'asc');

        if ($search) {
            $query->where('judul', 'like', "%{$search}%");
        }

        $blogs = $query->paginate($perPageBlog);

        return view('blog.list',  compact('active', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'blog';
        return view('blog.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:25',
            'isi' => 'required|string',
            'link_dokumentasi' => 'nullable|string',
            'image' => 'image|max:5000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => auth()->id(),  // Menyimpan id user yang menjual produk
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link_dokumentasi' => $request->link_dokumentasi,
            'created_at' => now(),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        DB::table('blogs')->insert($data);

        return redirect()->route('dashboard')->with('success', 'blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $active = 'blog';
        return view('blog.show', compact('blog', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $active = 'blog';
        return view('blog.edit', compact('blog', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'judul' => 'required|string|max:25',
            'isi' => 'required|string',
            'link_dokumentasi' => 'nullable|string',
            'image' => 'image|max:5000',
        ]);

        // Ambil data yang ada di tabel blogs berdasarkan id
        $blog = DB::table('blogs')->where('id', $blog->id)->first();

        if (!$blog) {
            return redirect()->back()->withErrors('blog not found!');
        }

        // Siapkan data yang akan diperbarui
        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link_dokumentasi' => $request->link_dokumentasi,
            'updated_at' => now(),
        ];

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        // Update data produk di database
        DB::table('blogs')->where('id', $blog->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Cari produk berdasarkan id
        // $blog = DB::table('blogs')->where('id', $blog->id)->first();

        if (!$blog) {
            return redirect()->back()->withErrors('blog not found!');
        }

        // Hapus gambar dari storage jika ada
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        // Hapus produk dari database
        DB::table('blogs')->where('id', $blog->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'blog deleted successfully!');
    }
}
