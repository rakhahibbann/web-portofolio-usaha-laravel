@extends('layout')

@section('title', $item->judul)

@section('content')
<a href="{{ url('/portfolio') }}" class="text-sm font-medium inline-flex items-center gap-1 mb-8" style="color: var(--ink-soft);">
    ← Kembali ke Portfolio
</a>

<div class="grid md:grid-cols-2 gap-12 items-start mb-16">
    <div class="card p-2 overflow-hidden">
        <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}"
             class="w-full rounded-xl" style="image-rendering: pixelated;">
    </div>

    <div>
        <p class="tag mb-2" style="color: var(--accent);">★ MAP-{{ str_pad($item->id, 2, '0', STR_PAD_LEFT) }}</p>
        <h1 class="font-display text-2xl md:text-3xl font-semibold mb-4" style="color: var(--ink);">{{ $item->judul }}</h1>
        <p class="text-lg leading-relaxed mb-8" style="color: var(--ink-soft);">{{ $item->deskripsi }}</p>

        <div class="space-y-5 mb-8">
            <div>
                <p class="tag mb-1" style="color: var(--ink);">ALAT</p>
                <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">{{ $item->alat }}</p>
            </div>
            <div>
                <p class="tag mb-1" style="color: var(--ink);">COCOK UNTUK</p>
                <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">{{ $item->cocokUntuk }}</p>
            </div>
        </div>

        <a href="{{ url('/contact') }}" class="btn-primary inline-block px-6 py-3.5">
            Pesan Map Seperti Ini
        </a>
    </div>
</div>

{{-- CONTOH LAIN YANG SEKATEGORI --}}
@if ($contohLain->count())
<div>
    <p class="tag mb-2" style="color: var(--accent-2);">CONTOH LAIN</p>
    <h2 class="font-display text-xl font-semibold mb-2" style="color: var(--ink);">Karya Sejenis Lainnya</h2>
    <p class="text-[15px] leading-relaxed mb-8 max-w-xl" style="color: var(--ink-soft);">
        Kalau kamu suka gaya map ini, ini beberapa karya lain yang mirip.
    </p>

    <div class="grid sm:grid-cols-2 gap-6">
        @foreach ($contohLain as $lain)
            <a href="{{ url('/portfolio/' . $lain->id) }}" class="card card-hover overflow-hidden block">
                <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                    <img src="{{ asset('images/' . $lain->gambar) }}" alt="{{ $lain->judul }}"
                         class="w-full h-40 object-cover" style="image-rendering: pixelated;">
                </div>
                <div class="p-5">
                    <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">{{ $lain->judul }}</h3>
                    <p class="text-[15px] leading-relaxed mb-3" style="color: var(--ink-soft);">{{ $lain->deskripsi }}</p>
                    <span class="text-sm font-medium" style="color: var(--accent-2);">Lihat karya ini →</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endif
@endsection
