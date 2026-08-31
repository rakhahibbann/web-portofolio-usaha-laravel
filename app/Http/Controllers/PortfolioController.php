<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        // Data karya ditulis langsung di sini, gak perlu database sama sekali.
        // Mau nambah karya baru? Tinggal copy salah satu blok di bawah, tempel,
        // terus ganti isinya.
        $portfolios = [
            (object) [
                'judul'     => 'Hutan Misterius',
                'deskripsi' => 'Map tileset gaya pixel art untuk game platformer 2D.',
                'gambar'    => 'map1.svg',
            ],
            (object) [
                'judul'     => 'Dungeon Bawah Tanah',
                'deskripsi' => 'Level design dungeon dengan jalur bertingkat.',
                'gambar'    => 'map2.svg',
            ],
            (object) [
                'judul'     => 'Kota Retro',
                'deskripsi' => 'Tileset kota bergaya 8-bit untuk game RPG.',
                'gambar'    => 'map3.svg',
            ],
        ];

        return view('portfolio', [
            'portfolios' => $portfolios,
        ]);
    }
}
