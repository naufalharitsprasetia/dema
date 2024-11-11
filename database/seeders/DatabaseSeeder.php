<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departement;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dema Kampus Siman',
            'email' => 'siman@gmail.com',
            'password' => bcrypt('bismillah'), // Enkripsi password
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Badan Pengurus Harian',
            'singkatan' => 'BPH',
            'urutan' => 1
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Kemahasiswaan',
            'urutan' => 2
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Keilmuan',
            'urutan' => 3
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Minat Bakat',
            'urutan' => 4
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Eksternal',
            'urutan' => 5
        ]);
        $this->call([
            BlogSeeder::class,
            DepartementSeeder::class,
        ]);
    }
}