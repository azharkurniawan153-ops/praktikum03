@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse($daftarLaporan as $laporan)
        @if($laporan['tinggi'] < 30)
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Waspada', 'warna' => '#d4a017'])
        @elseif($laporan['tinggi'] <= 70)
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Siaga', 'warna' => '#e67e22'])
        @else
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Awas', 'warna' => '#c0392b'])
        @endif
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection