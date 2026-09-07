@extends('layout')

@section('title', 'Kontak')

@section('content')
<div class="max-w-lg">
    <p class="tag mb-2" style="color: var(--accent-3);">HUBUNGI SAYA</p>
    <h1 class="font-display text-2xl md:text-3xl font-semibold mb-10" style="color: var(--ink);">Pesan Map Kamu</h1>

    @if (session('sukses'))
        <div class="rounded-xl px-4 py-3 mb-6 text-[15px]" style="background: #12332B; color: var(--accent-2); border: 1px solid var(--accent-2);">
            {{ session('sukses') }}
        </div>
    @endif

    <form action="{{ url('/contact') }}" method="POST" class="card p-8 space-y-5">
        @csrf
        <div>
            <label class="block tag mb-2" style="color: var(--ink-soft);">NAMA</label>
            <input type="text" name="nama" required
                   class="w-full px-3 py-2.5 rounded-lg outline-none text-[15px]"
                   style="background: var(--bg); color: var(--ink); border: 1px solid var(--border);">
        </div>
        <div>
            <label class="block tag mb-2" style="color: var(--ink-soft);">EMAIL</label>
            <input type="email" name="email" required
                   class="w-full px-3 py-2.5 rounded-lg outline-none text-[15px]"
                   style="background: var(--bg); color: var(--ink); border: 1px solid var(--border);">
        </div>
        <div>
            <label class="block tag mb-2" style="color: var(--ink-soft);">PESAN</label>
            <textarea name="pesan" rows="4" required
                      class="w-full px-3 py-2.5 rounded-lg outline-none text-[15px]"
                      style="background: var(--bg); color: var(--ink); border: 1px solid var(--border);"></textarea>
        </div>
        <button type="submit" class="btn-primary px-6 py-3.5 w-full">
            Kirim Pesan
        </button>
    </form>
</div>
@endsection
