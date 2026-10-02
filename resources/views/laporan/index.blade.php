@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')

<div class="hero">
    <h1>Daftar Laporan Banjir</h1>

    <p>
        Berikut beberapa contoh laporan kejadian banjir
        yang telah masuk ke dalam sistem LaporBanjir.
    </p>
</div>

<div class="section-title">
    <h2>Laporan Terkini</h2>
    <p>
        Informasi kondisi genangan berdasarkan laporan warga.
    </p>
</div>

<div class="laporan-grid">

    @forelse ($laporan as $item)

        @include('partials.LaporanCard', ['item' => $item])

    @empty

        <div class="card">
            <h3>Belum ada laporan</h3>
            <p>Belum terdapat laporan banjir.</p>
        </div>

    @endforelse

</div>

@endsection