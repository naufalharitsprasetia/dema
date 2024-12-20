<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDepartement;
use App\Models\Blog;
use App\Models\UKM;
use App\Models\Departement;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $active = 'beranda';
        // Ambil 2 data terbaru untuk $beritaUtama dengan Eloquent agar bisa menggunakan relasi
        $beritaUtamaAll = Blog::with('user')->orderBy('created_at', 'desc')->limit(1)->get();

        // Ambil sisa data setelah 2 data terbaru untuk $blogs dengan Query Builder
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->offset(2)->limit(4)->get();
        $beritaUtama = $beritaUtamaAll[0] ?? null;

        return view('home.index',  compact('active', 'beritaUtama', 'blogs'));
    }

    public function about()
    {
        $active = 'about';
        return view('home.about',  compact('active'));
    }

    public function contact()
    {
        $active = 'contact';
        return view('home.contact',  compact('active'));
    }
    public function faq()
    {
        $active = 'faq';
        return view('home.faq',  compact('active'));
    }
    public function dashboard()
    {
        $active = "dashboard";
        $userId = auth()->user()->id;
        $blogs = Blog::where('user_id', $userId)->get(); // where User id == auth()
        $divisions = Division::all();
        $departements = Departement::all();
        $ukms = UKM::all();
        $anggota_departements = AnggotaDepartement::all();
        return view('admin.dashboard', compact('active', 'blogs', 'divisions', 'departements', 'ukms', 'anggota_departements'));
    }
}