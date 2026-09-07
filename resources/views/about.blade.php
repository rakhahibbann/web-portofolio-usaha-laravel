@extends('layout')

@section('title', 'Tentang')

@section('content')
<div class="max-w-2xl">
    <p class="tag mb-2" style="color: var(--accent-3);">TENTANG SAYA</p>
    <h1 class="font-display text-2xl md:text-3xl font-semibold mb-10" style="color: var(--ink);">Kenalan Yuk</h1>

    <div class="card p-8 space-y-4 text-[15px] leading-relaxed" style="color: var(--ink-soft);">
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
