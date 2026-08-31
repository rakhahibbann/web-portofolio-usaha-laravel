@extends('layout')

@section('title', 'Tentang')

@section('content')
<div class="max-w-2xl">
    <p class="pixel-tag mb-3" style="color: var(--gold);">CHARACTER INFO</p>
    <h1 class="font-pixel text-xl md:text-2xl mb-10" style="color: var(--ink);">Tentang Saya</h1>

    <div class="pixel-frame p-8 space-y-4 text-lg leading-relaxed" style="color: var(--ink-soft);">
        <p>
            Halo, saya Rakha. Saya bikin map, tileset, dan level design 2D buat
            game indie. Buat saya, map bukan cuma latar belakang — map itu bagian
            dari cerita yang bikin pemain penasaran buat terus melangkah.
        </p>
        <p>
            Alat yang biasa saya pakai: Aseprite buat pixel art, Tiled Map Editor
            buat nyusun level, dan Photoshop buat sentuhan akhir.
        </p>
    </div>
</div>
@endsection
