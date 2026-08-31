<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Cek data wajib diisi
        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        // Sementara pesan cuma ditampilkan sukses saja.
        // Nanti bisa ditambah kode buat simpan ke database atau kirim email.

        return back()->with('sukses', 'Pesan kamu udah terkirim! Saya bakal segera balas ya.');
    }
}
