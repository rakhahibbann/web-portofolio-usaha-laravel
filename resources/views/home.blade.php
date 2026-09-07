@extends('layout')

@section('title', 'Beranda')

@section('content')
<div class="grid md:grid-cols-2 gap-12 items-center mb-24">
    <div>
        <p class="tag mb-4" style="color: var(--accent-3);">JASA DESAIN MAP GAME 2D</p>
        <h1 class="font-display text-3xl md:text-4xl font-semibold leading-tight mb-6" style="color: var(--ink);">
            Map game 2D yang bikin pemain betah main lama
        </h1>
        <p class="text-lg leading-relaxed mb-8" style="color: var(--ink-soft);">
            Saya bikinin map, tileset, sama level design 2D gaya pixel art buat game kamu —
            dari hutan misterius sampai dungeon bawah tanah, tinggal pakai langsung di engine.
        </p>
        <a href="{{ url('/contact') }}" class="btn-primary inline-block px-6 py-3.5">
            Pesan Map Sekarang
        </a>
    </div>

    <div class="card p-2 overflow-hidden">
        <svg width="100%" height="220" viewBox="0 0 320 200" shape-rendering="crispEdges" style="border-radius: 0.75rem; overflow: hidden;">
            <rect width="320" height="200" fill="#1B1E28"/>
            <rect x="250" y="20" width="20" height="20" fill="#E8A23D"/>
            <polygon points="0,140 40,90 80,140" fill="#262A36"/>
            <polygon points="60,140 110,80 160,140" fill="#30354a"/>
            <rect x="0" y="140" width="320" height="60" fill="#2E6B4C"/>
            <rect x="0" y="140" width="320" height="10" fill="#255741"/>
            <rect x="200" y="110" width="20" height="30" fill="#5c4530"/>
            <rect x="190" y="90" width="40" height="24" fill="#255741"/>
            <rect x="90" y="150" width="16" height="16" fill="#34C29B"/>
            <rect x="90" y="150" width="16" height="4" fill="#7FE0C4"/>
        </svg>
    </div>
</div>

{{-- LAYANAN: TYPE A / B / C — klik gambar untuk buka halaman detail lengkap --}}
<div class="mb-24">
    <p class="tag mb-2" style="color: var(--accent-2);">LAYANAN</p>
    <h2 class="font-display text-2xl font-semibold mb-2" style="color: var(--ink);">Pilih Jenis Map yang Kamu Butuh</h2>
    <p class="text-[15px] leading-relaxed mb-8 max-w-xl" style="color: var(--ink-soft);">
        Klik salah satu untuk lihat penjelasan lengkap, proses pengerjaan, dan contoh karya aslinya.
    </p>

    <div class="grid md:grid-cols-3 gap-6">
        <a href="{{ url('/layanan/type-a') }}" class="card card-hover overflow-hidden block">
            <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                <img src="{{ asset('images/type-a.svg') }}" alt="Pixel Art Map"
                     class="w-full h-40 object-cover" style="image-rendering: pixelated;">
            </div>
            <div class="p-6">
                <p class="tag mb-3" style="color: var(--accent);">◆ TYPE A</p>
                <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Pixel Art Map</h3>
                <p class="text-[15px] leading-relaxed mb-4" style="color: var(--ink-soft);">
                    Gaya retro detail, cocok buat platformer dan RPG 2D klasik.
                </p>
                <span class="text-sm font-medium" style="color: var(--accent);">Lihat detail lengkap →</span>
            </div>
        </a>

        <a href="{{ url('/layanan/type-b') }}" class="card card-hover overflow-hidden block">
            <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                <img src="{{ asset('images/type-b.svg') }}" alt="Tileset Custom"
                     class="w-full h-40 object-cover" style="image-rendering: pixelated;">
            </div>
            <div class="p-6">
                <p class="tag mb-3" style="color: var(--accent-2);">◆ TYPE B</p>
                <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Tileset Custom</h3>
                <p class="text-[15px] leading-relaxed mb-4" style="color: var(--ink-soft);">
                    Set ubin yang bisa disusun ulang, dibikin sesuai tema dunia game kamu.
                </p>
                <span class="text-sm font-medium" style="color: var(--accent-2);">Lihat detail lengkap →</span>
            </div>
        </a>

        <a href="{{ url('/layanan/type-c') }}" class="card card-hover overflow-hidden block">
            <div class="w-full h-40 flex items-center justify-center" style="background: var(--panel-soft);">
                <img src="{{ asset('images/type-c.svg') }}" alt="Level Design"
                     class="w-full h-40 object-cover" style="image-rendering: pixelated;">
            </div>
            <div class="p-6">
                <p class="tag mb-3" style="color: var(--accent-3);">◆ TYPE C</p>
                <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Level Design</h3>
                <p class="text-[15px] leading-relaxed mb-4" style="color: var(--ink-soft);">
                    Alur permainan dan tata letak map yang terasa natural buat dijelajahi.
                </p>
                <span class="text-sm font-medium" style="color: var(--accent-3);">Lihat detail lengkap →</span>
            </div>
        </a>
    </div>
</div>

{{-- ARAH BISNIS — dibuat sesimpel mungkin, 3 tahap --}}
<div class="mb-8">
    <p class="tag mb-2" style="color: var(--accent);">ARAH BISNIS</p>
    <h2 class="font-display text-2xl font-semibold mb-2" style="color: var(--ink);">Mau Dibawa ke Mana Bisnis Ini?</h2>
    <p class="text-[15px] leading-relaxed mb-8 max-w-2xl" style="color: var(--ink-soft);">
        Supaya gampang dipahami, begini tahapan pertumbuhannya — dari sekarang sampai target ke depan.
    </p>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="card p-6 relative">
            <span class="font-display text-3xl font-semibold block mb-3" style="color: var(--accent);">1</span>
            <p class="tag mb-2" style="color: var(--ink-soft);">SEKARANG</p>
            <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Kerja per Pesanan</h3>
            <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">
                Bikin map custom satu-satu sesuai request langsung dari klien.
            </p>
        </div>
        <div class="card p-6 relative">
            <span class="font-display text-3xl font-semibold block mb-3" style="color: var(--accent-2);">2</span>
            <p class="tag mb-2" style="color: var(--ink-soft);">BERIKUTNYA</p>
            <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Produk Siap Pakai</h3>
            <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">
                Bikin paket tileset yang sudah jadi, bisa dijual berulang ke banyak klien sekaligus.
            </p>
        </div>
        <div class="card p-6 relative">
            <span class="font-display text-3xl font-semibold block mb-3" style="color: var(--accent-3);">3</span>
            <p class="tag mb-2" style="color: var(--ink-soft);">TARGET</p>
            <h3 class="font-display text-base font-semibold mb-2" style="color: var(--ink);">Kerja Sama Tetap</h3>
            <p class="text-[15px] leading-relaxed" style="color: var(--ink-soft);">
                Jadi mitra desain map tetap untuk tim game developer atau studio kecil.
            </p>
        </div>
    </div>
</div>
@endsection
