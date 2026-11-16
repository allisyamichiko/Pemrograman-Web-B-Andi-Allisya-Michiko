@extends('layouts.app')

@section('judul', 'Ubah Buku')

@section('konten')
    <div class="bg-white rounded-xl shadow p-6">
        <h1 class="text-2xl font-bold mb-6">Ubah Buku</h1>

        <form action="{{ route('buku.update', $buku) }}" method="POST">
            @csrf
            @method('PUT')

            @include('buku._form')

            <div class="mt-6 flex gap-3">
                <button class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                    Perbarui
                </button>

                <a href="{{ route('buku.index') }}"
                   class="px-5 py-2 rounded-lg bg-slate-200 hover:bg-slate-300">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
