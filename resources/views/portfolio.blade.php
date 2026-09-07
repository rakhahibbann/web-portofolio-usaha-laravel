@extends('layout')

@section('title', 'Portfolio')

@section('content')
<p class="tag mb-2" style="color: var(--accent-3);">PORTFOLIO</p>
<h1 class="font-display text-2xl md:text-3xl font-semibold mb-3" style="color: var(--ink);">Karya-Karya Map Game 2D</h1>
<p class="text-[15px] mb-12 max-w-xl" style="color: var(--ink-soft);">Klik salah satu karya untuk lihat detail lengkap, alat yang dipakai, dan contoh karya sejenis lainnya.</p>

@php
    $warnaTag = ['var(--accent)', 'var(--accent-2)', 'var(--accent-3)'];
@endphp

<div class="grid md:grid-cols-3 gap-6">
    @forelse ($portfolios as $item)
        @php $warna = $warnaTag[$loop->index % count($warnaTag)]; @endphp
        <a href="{{ url('/portfolio/' . $item->id) }}" class="card card-hover overflow-hidden block">
            <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}"
                     class="w-full h-40 object-cover" style="image-rendering: pixelated;"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <span class="tag hidden items-center justify-center w-full h-full" style="color: var(--ink-soft); display:none;">
                    NO IMAGE
                </span>
            </div>
            <div class="p-5">
                <span class="tag" style="color: {{ $warna }};">
                    ★ MAP-{{ str_pad($item->id, 2, '0', STR_PAD_LEFT) }}
                </span>
                <h3 class="font-display text-base font-semibold mt-3 mb-2" style="color: var(--ink);">{{ $item->judul }}</h3>
                <p class="text-[15px] leading-relaxed mb-3" style="color: var(--ink-soft);">{{ $item->deskripsi }}</p>
                <span class="text-sm font-medium" style="color: {{ $warna }};">Lihat detail →</span>
            </div>
        </a>
    @empty
        <p class="col-span-3 text-center py-14 text-lg" style="color: var(--ink-soft);">
            Belum ada karya. Tambahin lewat PortfolioController.php ya!
        </p>
    @endforelse
</div>
@endsection
