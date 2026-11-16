@extends('layouts.app')

@section('judul', 'Detail Buku')

@section('konten')
    <div class="bg-white rounded-xl shadow p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Detail Buku</h1>

            <a href="{{ route('buku.index') }}"
               class="px-4 py-2 rounded-lg bg-slate-200 hover:bg-slate-300">
                Kembali
            </a>
        </div>

        <div class="space-y-5">
            <div>
                <p class="text-sm text-slate-500">Judul Buku</p>
                <p class="text-lg font-semibold">{{ $buku->judul }}</p>
            </div>

            <div>
                <p class="text-sm text-slate-500">Penulis</p>
                <p>{{ $buku->penulis }}</p>
            </div>

            <div>
                <p class="text-sm text-slate-500">Tahun Terbit</p>
                <p>{{ $buku->tahun_terbit }}</p>
            </div>

            <div>
                <p class="text-sm text-slate-500">Sinopsis</p>
                <p class="whitespace-pre-line">
                    {{ $buku->sinopsis ?: 'Belum ada sinopsis.' }}
                </p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('buku.edit', $buku) }}"
               class="bg-amber-500 text-white px-5 py-2 rounded-lg hover:bg-amber-600">
                Ubah Buku
            </a>
        </div>
    </div>
@endsection
