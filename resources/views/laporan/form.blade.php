@extends('layouts.app')

@section('title', 'Laporkan Banjir')

@section('content')

<div class="hero">
    <h1>Laporkan Kejadian Banjir</h1>

    <p>
        Bantu BPBD Kabupaten Bandung mendapatkan informasi
        kondisi banjir secara cepat dengan mengirimkan laporan
        dari wilayah Anda.
    </p>
</div>

<div class="card">

    <div class="section-title">
        <h2>Form Laporan</h2>
        <p>Silakan isi data kejadian banjir dengan lengkap.</p>
    </div>

    @if ($errors->any())
        <div class="alert" style="background:#fee2e2; color:#991b1b; border-color:#dc2626;">
             Mohon periksa kembali data yang Anda masukkan.
        </div>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nama"> Nama Pelapor</label>

            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama Anda"
                value="{{ old('nama') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="lokasi"> Lokasi Kejadian</label>

            <input
                type="text"
                id="lokasi"
                name="lokasi"
                placeholder="Contoh: Kecamatan Dayeuhkolot"
                value="{{ old('lokasi') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="tinggi"> Tinggi Genangan Air (cm)</label>

            <input
                type="number"
                id="tinggi"
                name="tinggi"
                placeholder="Contoh: 50"
                value="{{ old('tinggi') }}"
                min="1"
                required
            >
        </div>

        <button type="submit" class="btn">
             Kirim Laporan
        </button>

    </form>

</div>

@endsection