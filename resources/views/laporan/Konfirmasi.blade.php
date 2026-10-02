@extends('layouts.app')

@section('title', 'Laporan Berhasil')

@section('content')

<div class="hero">
    <h1>Laporan Berhasil Dikirim! </h1>

    <p>
        Terima kasih telah membantu memberikan informasi
        mengenai kondisi banjir di Kabupaten Bandung.
    </p>
</div>

<x-alert>
    Laporan Anda berhasil dikirim dan telah diterima oleh sistem.
</x-alert>

<div class="card">

    <div class="section-title">
        <h2>Detail Laporan</h2>
        <p>Berikut adalah data yang Anda kirimkan.</p>
    </div>

    <div class="data-box">

        <div class="data-item">
            <strong> Nama Pelapor</strong>
            {{ $data['nama'] }}
        </div>

        <div class="data-item">
            <strong> Lokasi Kejadian</strong>
            {{ $data['lokasi'] }}
        </div>

        <div class="data-item">
            <strong> Tinggi Genangan</strong>
            {{ $data['tinggi'] }} cm
        </div>

    </div>

    <br>

    <a href="{{ route('laporan.form') }}" class="btn">
         Buat Laporan Baru
    </a>

    <a href="{{ route('laporan.index') }}"
       class="btn"
       style="background:#334155;">
         Lihat Daftar Laporan
    </a>

</div>

@endsection