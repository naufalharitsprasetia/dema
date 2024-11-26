@extends('layout.main')

@section('content')
    {{-- Departement --}}
    <div class="departement-section bg-gray-50 text-primary">
        <div class="departement max-w-7xl mx-auto py-16 px-10">
            <h1 class="text-5xl font-bold text-center mb-4">{{ $departement->nama }}</h1>
            <p>Deskripsi :</p>
            <br>
            <h3>Anggota Departement :</h3>
            <div class="members-departement flex gap-4">
                <div class="member-card p-3 bg-slate-400 rounded-md">
                    <h4>Naufal Harits</h4>
                    <p>Ketua</p>
                    <p>Teknik Informatika</p>
                    <p>Subang</p>
                </div>
                <div class="member-card p-3 bg-slate-400 rounded-md">
                    <h4>Naufal Harits</h4>
                    <p>Ketua</p>
                    <p>Teknik Informatika</p>
                    <p>Subang</p>
                </div>
                <div class="member-card p-3 bg-slate-400 rounded-md">
                    <h4>Naufal Harits</h4>
                    <p>Ketua</p>
                    <p>Teknik Informatika</p>
                    <p>Subang</p>
                </div>
            </div>
        </div>
    </div>
@endsection
