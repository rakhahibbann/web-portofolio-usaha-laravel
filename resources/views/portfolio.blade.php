@extends('layout')

@section('title', 'Portfolio')

@section('content')
<p class="pixel-tag mb-3" style="color: var(--gold);">LEVEL SELECT</p>
<h1 class="font-pixel text-xl md:text-2xl mb-12" style="color: var(--ink);">Karya-Karya Map Game 2D</h1>

@php
    $warnaTag = ['#5EEAD4', '#FF6B81', '#FFD166'];
@endphp

<div class="grid md:grid-cols-3 gap-6">
    @forelse ($portfolios as $item)
        <div class="pixel-frame overflow-hidden">
            <div class="w-full h-40 flex items-center justify-center" style="background: #2A2A52;">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}"
                     class="w-full h-40 object-cover" style="image-rendering: pixelated;"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <span class="pixel-tag hidden items-center justify-center w-full h-full" style="color: var(--ink-soft); display:none;">
                    NO IMAGE
                </span>
            </div>
            <div class="p-5">
                <span class="pixel-tag" style="color: {{ $warnaTag[$loop->index % count($warnaTag)] }};">
                    ★ MAP-{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                </span>
                <h3 class="font-pixel text-sm mt-3 mb-2" style="color: var(--ink);">{{ $item->judul }}</h3>
                <p class="text-base leading-relaxed" style="color: var(--ink-soft);">{{ $item->deskripsi }}</p>
            </div>
        </div>
    @empty
        <p class="col-span-3 text-center py-14 text-lg" style="color: var(--ink-soft);">
            Belum ada karya. Tambahin lewat PortfolioController.php ya!
        </p>
    @endforelse
</div>
@endsection
