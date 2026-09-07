<?php

namespace App\Http\Controllers;

class LayananController extends Controller
{
    /**
     * Data layanan ditulis langsung di sini (sama seperti PortfolioController).
     * Mau ubah teksnya? Tinggal edit array di bawah.
     */
    public static function data(): array
    {
        return [
            'type-a' => (object) [
                'slug'       => 'type-a',
                'tag'        => '◆ TYPE A',
                'warna'      => 'var(--accent)',
                'judul'      => 'Pixel Art Map',
                'ringkas'    => 'Gaya retro detail, cocok buat platformer dan RPG 2D klasik.',
                'gambar'     => 'type-a.svg',
                'cocokUntuk' => 'platformer dan RPG 2D klasik yang butuh gaya retro detail.',
                'termasuk'   => 'file map siap pakai (PNG / tileset), preview render sebelum final, dan revisi sewajarnya sampai kamu puas.',
                'proses'     => ['Diskusi tema dan referensi', 'Sketsa awal map', 'Pewarnaan & detail pixel', 'File final dikirim'],
            ],
            'type-b' => (object) [
                'slug'       => 'type-b',
                'tag'        => '◆ TYPE B',
                'warna'      => 'var(--accent-2)',
                'judul'      => 'Tileset Custom',
                'ringkas'    => 'Set ubin yang bisa disusun ulang, dibikin sesuai tema dunia game kamu.',
                'gambar'     => 'type-b.svg',
                'cocokUntuk' => 'game yang butuh banyak variasi environment — dungeon, kota, hutan, dan sejenisnya.',
                'termasuk'   => 'tileset lengkap yang bisa disusun ulang sendiri, plus panduan pemakaian sederhana.',
                'proses'     => ['Tentukan tema dunia', 'Desain tile dasar', 'Bikin variasi & detail', 'Export siap pakai'],
            ],
            'type-c' => (object) [
                'slug'       => 'type-c',
                'tag'        => '◆ TYPE C',
                'warna'      => 'var(--accent-3)',
                'judul'      => 'Level Design',
                'ringkas'    => 'Alur permainan dan tata letak map yang terasa natural buat dijelajahi.',
                'gambar'     => 'type-c.svg',
                'cocokUntuk' => "developer yang butuh map terasa 'enak dijelajahi', bukan cuma cantik dilihat.",
                'termasuk'   => 'layout map, catatan alur permainan (flow pemain), dan saran penempatan objek/musuh.',
                'proses'     => ['Diskusi konsep gameplay', 'Sketsa alur pemain', 'Penyempurnaan layout', 'Layout final dikirim'],
            ],
        ];
    }

    public function show($slug)
    {
        $semua   = self::data();
        $layanan = $semua[$slug] ?? null;

        if (! $layanan) {
            abort(404);
        }

        // Ambil contoh karya asli dari Portfolio yang sekategori dengan layanan ini.
        $contoh = collect(PortfolioController::data())
            ->filter(fn ($p) => in_array($slug, $p->kategori))
            ->take(2)
            ->values();

        return view('layanan', [
            'layanan' => $layanan,
            'contoh'  => $contoh,
        ]);
    }
}
