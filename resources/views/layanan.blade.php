@extends('layout')

@section('title', $layanan->judul)

@section('content')
<a href="{{ url('/') }}" class="text-sm font-medium inline-flex items-center gap-1 mb-8" style="color: var(--ink-soft);">
    ← Kembali ke Home
</a>

<div class="grid md:grid-cols-2 gap-12 items-start mb-16">
    <div class="card p-2 overflow-hidden">
        <img src="{{ asset('images/' . $layanan->gambar) }}" alt="{{ $layanan->judul }}"
             class="w-full rounded-xl" style="image-rendering: pixelated;">
    </div>

    <div>
        <p class="tag mb-2" style="color: {{ $layanan->warna }};">{{ $layanan->tag }}</p>
        <h1 class="font-display text-2xl md:text-3xl font-semibold mb-4" style="color: var(--ink);">{{ $layanan->judul }}</h1>
        <p class="text-lg leading-relaxed mb-8" style="color: var(--ink-soft);">{{ $layanan->ringkas }}</p>

        <div class="space-y-5 mb-8">
            <div>
                <p class="tag mb-1" style="color: var(--ink);">COCOK UNTUK</p>
                <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">{{ $layanan->cocokUntuk }}</p>
            </div>
            <div>
                <p class="tag mb-1" style="color: var(--ink);">TERMASUK</p>
                <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">{{ $layanan->termasuk }}</p>
            </div>
        </div>

        <a href="{{ url('/contact') }}" class="btn-primary inline-block px-6 py-3.5">
            Pesan {{ $layanan->judul }}
        </a>
    </div>
</div>

{{-- PROSES PENGERJAAN --}}
<div class="mb-16">
    <p class="tag mb-2" style="color: {{ $layanan->warna }};">PROSES PENGERJAAN</p>
    <h2 class="font-display text-xl font-semibold mb-8" style="color: var(--ink);">Gimana Cara Kerjanya</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($layanan->proses as $i => $langkah)
            <div class="card p-5">
                <span class="font-display text-2xl font-semibold block mb-2" style="color: {{ $layanan->warna }};">{{ $i + 1 }}</span>
                <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">{{ $langkah }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- CONTOH PENERAPAN NYATA DARI PORTFOLIO --}}
@if ($contoh->count())
<div>
    <p class="tag mb-2" style="color: {{ $layanan->warna }};">CONTOH NYATA</p>
    <h2 class="font-display text-xl font-semibold mb-2" style="color: var(--ink);">Biar Gampang Dipahami, Ini Contohnya</h2>
    <p class="text-[15px] leading-relaxed mb-8 max-w-xl" style="color: var(--ink-soft);">
        Karya asli dari portfolio yang dibikin pakai jenis layanan {{ $layanan->judul }} ini.
    </p>

    <div class="grid sm:grid-cols-2 gap-6">
        @foreach ($contoh as $item)
            <a href="{{ url('/portfolio/' . $item->id) }}" class="card card-hover overflow-hidden block">
                <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                    <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}"
                         class="w-full h-40 object-cover" style="image-rendering: pixelated;">
                </div>
                <div class="p-5">
                    <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">{{ $item->judul }}</h3>
                    <p class="text-[15px] leading-relaxed mb-3" style="color: var(--ink-soft);">{{ $item->deskripsi }}</p>
                    <span class="text-sm font-medium" style="color: {{ $layanan->warna }};">Lihat karya ini →</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endif
@endsection
