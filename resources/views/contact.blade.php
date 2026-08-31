@extends('layout')

@section('title', 'Kontak')

@section('content')
<div class="max-w-lg">
    <p class="pixel-tag mb-3" style="color: var(--gold);">SEND MESSAGE</p>
    <h1 class="font-pixel text-xl md:text-2xl mb-10" style="color: var(--ink);">Hubungi Saya</h1>

    @if (session('sukses'))
        <div class="pixel-frame px-4 py-3 mb-6 text-base" style="background: #123B33; color: var(--mint);">
            {{ session('sukses') }}
        </div>
    @endif

    <form action="{{ url('/contact') }}" method="POST" class="pixel-frame p-8 space-y-5">
        @csrf
        <div>
            <label class="block pixel-tag mb-2" style="color: var(--ink-soft);">NAMA</label>
            <input type="text" name="nama" required
                   class="w-full px-3 py-2 outline-none text-lg"
                   style="background: var(--bg); color: var(--ink); box-shadow: inset 0 0 0 2px var(--border);">
        </div>
        <div>
            <label class="block pixel-tag mb-2" style="color: var(--ink-soft);">EMAIL</label>
            <input type="email" name="email" required
                   class="w-full px-3 py-2 outline-none text-lg"
                   style="background: var(--bg); color: var(--ink); box-shadow: inset 0 0 0 2px var(--border);">
        </div>
        <div>
            <label class="block pixel-tag mb-2" style="color: var(--ink-soft);">PESAN</label>
            <textarea name="pesan" rows="4" required
                      class="w-full px-3 py-2 outline-none text-lg"
                      style="background: var(--bg); color: var(--ink); box-shadow: inset 0 0 0 2px var(--border);"></textarea>
        </div>
        <button type="submit" class="pixel-btn px-6 py-4 w-full">
            KIRIM PESAN
        </button>
    </form>
</div>
@endsection
