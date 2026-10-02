<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Menampilkan form laporan
    public function form()
    {
        return view('laporan.form');
    }

    // Memproses laporan yang dikirim
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric|min:1',
        ]);

        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('data'));
    }

    // Menampilkan daftar laporan contoh
    public function index()
    {
        $laporan = [
            [
                'nama' => 'Andi Pratama',
                'lokasi' => 'Kecamatan Dayeuhkolot',
                'tinggi' => 25,
            ],
            [
                'nama' => 'Siti Rahma',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi' => 55,
            ],
            [
                'nama' => 'Dimas Saputra',
                'lokasi' => 'Kecamatan Bojongsoang',
                'tinggi' => 85,
            ],
            [
                'nama' => 'Rina Amelia',
                'lokasi' => 'Kecamatan Majalaya',
                'tinggi' => 40,
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }
}