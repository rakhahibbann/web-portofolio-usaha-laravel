@extends('layout')

@section('title', 'Beranda')

@section('content')
<div class="grid md:grid-cols-2 gap-12 items-center mb-20">
    <div>
        <p class="pixel-tag mb-4" style="color: var(--gold);">PRESS START</p>
        <h1 class="font-pixel text-2xl md:text-3xl leading-relaxed mb-6" style="color: var(--ink);">
            Map game 2D yang bikin pemain betah main lama
        </h1>
        <p class="text-lg leading-relaxed mb-8" style="color: var(--ink-soft);">
            Saya bikinin map, tileset, sama level design 2D gaya pixel art buat game kamu —
            dari hutan misterius sampai dungeon bawah tanah, tinggal pakai langsung di engine.
        </p>
        <a href="{{ url('/contact') }}" class="pixel-btn inline-block px-6 py-4">
            PESAN MAP
        </a>
    </div>

    <div class="pixel-frame p-2" style="background: #242453;">
        <svg width="100%" height="220" viewBox="0 0 320 200" shape-rendering="crispEdges">
            <rect width="320" height="200" fill="#242453"/>
            <rect x="250" y="20" width="20" height="20" fill="#FFD166"/>
            <polygon points="0,140 40,90 80,140" fill="#3B3B6B"/>
            <polygon points="60,140 110,80 160,140" fill="#4A4A7A"/>
            <rect x="0" y="140" width="320" height="60" fill="#3FA35D"/>
            <rect x="0" y="140" width="320" height="10" fill="#2F7A46"/>
            <rect x="200" y="110" width="20" height="30" fill="#7A4B2A"/>
            <rect x="190" y="90" width="40" height="24" fill="#2F7A46"/>
            <rect x="90" y="150" width="16" height="16" fill="#5EEAD4"/>
            <rect x="90" y="150" width="16" height="4" fill="#99F6E4"/>
        </svg>
    </div>
</div>

<div class="grid md:grid-cols-3 gap-6">
    <div class="pixel-frame p-6">
        <p class="pixel-tag mb-3" style="color: var(--mint);">◆ TYPE A</p>
        <h3 class="font-pixel text-sm mb-3" style="color: var(--ink);">PIXEL ART MAP</h3>
        <p class="text-base leading-relaxed" style="color: var(--ink-soft);">
            Gaya retro detail, cocok buat platformer dan RPG 2D klasik.
        </p>
    </div>
    <div class="pixel-frame p-6">
        <p class="pixel-tag mb-3" style="color: var(--coral);">◆ TYPE B</p>
        <h3 class="font-pixel text-sm mb-3" style="color: var(--ink);">TILESET CUSTOM</h3>
        <p class="text-base leading-relaxed" style="color: var(--ink-soft);">
            Set ubin yang bisa disusun ulang, dibikin sesuai tema dunia game kamu.
        </p>
    </div>
    <div class="pixel-frame p-6">
        <p class="pixel-tag mb-3" style="color: var(--gold);">◆ TYPE C</p>
        <h3 class="font-pixel text-sm mb-3" style="color: var(--ink);">LEVEL DESIGN</h3>
        <p class="text-base leading-relaxed" style="color: var(--ink-soft);">
            Alur permainan dan tata letak map yang terasa natural buat dijelajahi.
        </p>
    </div>
</div>
@endsection
