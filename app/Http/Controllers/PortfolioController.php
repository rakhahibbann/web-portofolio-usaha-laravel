<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Data karya ditulis langsung di sini, gak perlu database sama sekali.
     * Mau nambah karya baru? Tinggal copy salah satu blok di bawah, tempel,
     * terus ganti isinya. 'kategori' dipakai buat nyambungin karya ini ke
     * halaman layanan (Type A/B/C) sebagai contoh penerapan.
     */
    public static function data(): array
    {
        return [
            1 => (object) [
                'id'         => 1,
                'judul'      => 'Hutan Misterius',
                'deskripsi'  => 'Map tileset gaya pixel art untuk game platformer 2D.',
                'gambar'     => 'map1.svg',
                'alat'       => 'Aseprite',
                'cocokUntuk' => 'game platformer eksplorasi hutan',
                'kategori'   => ['type-a'],
            ],
            2 => (object) [
                'id'         => 2,
                'judul'      => 'Dungeon Bawah Tanah',
                'deskripsi'  => 'Level design dungeon dengan jalur bertingkat.',
                'gambar'     => 'map2.svg',
                'alat'       => 'Tiled Map Editor',
                'cocokUntuk' => 'game RPG atau dungeon crawler',
                'kategori'   => ['type-c'],
            ],
            3 => (object) [
                'id'         => 3,
                'judul'      => 'Kota Retro',
                'deskripsi'  => 'Tileset kota bergaya 8-bit untuk game RPG.',
                'gambar'     => 'map3.svg',
                'alat'       => 'Aseprite + Photoshop',
                'cocokUntuk' => 'game RPG bertema perkotaan',
                'kategori'   => ['type-b'],
            ],
            4 => (object) [
                'id'         => 4,
                'judul'      => 'Padang Rumput Terbuka',
                'deskripsi'  => 'Tileset padang rumput luas dengan variasi pepohonan dan bebatuan.',
                'gambar'     => 'map4.svg',
                'alat'       => 'Aseprite',
                'cocokUntuk' => 'game eksplorasi atau open map 2D',
                'kategori'   => ['type-a', 'type-b'],
            ],
            5 => (object) [
                'id'         => 5,
                'judul'      => 'Gua Kristal',
                'deskripsi'  => 'Level design gua dengan cahaya kristal sebagai penanda arah.',
                'gambar'     => 'map5.svg',
                'alat'       => 'Tiled Map Editor',
                'cocokUntuk' => 'game puzzle atau platformer bertema gua',
                'kategori'   => ['type-c'],
            ],
        ];
    }

    public function index()
    {
        return view('portfolio', [
            'portfolios' => self::data(),
        ]);
    }

    /**
     * Halaman detail satu karya + "contoh lain" dari karya sejenis.
     */
    public function show($id)
    {
        $semua = self::data();
        $item  = $semua[$id] ?? null;

        if (! $item) {
            abort(404);
        }

        // Ambil karya lain yang sekategori sebagai "contoh lain", maksimal 2.
        $contohLain = collect($semua)
            ->reject(fn ($p) => $p->id === $item->id)
            ->filter(fn ($p) => count(array_intersect($p->kategori, $item->kategori)) > 0)
            ->take(2)
            ->values();

        return view('portfolio-detail', [
            'item'       => $item,
            'contohLain' => $contohLain,
        ]);
    }
}
