<div class="laporan-card">

    <div class="laporan-icon">
        
    </div>

    <h3>{{ $item['nama'] }}</h3>

    <p class="info">
         {{ $item['lokasi'] }}
    </p>

    <p class="info">
         Tinggi genangan:
        <strong>{{ $item['tinggi'] }} cm</strong>
    </p>

    @if ($item['tinggi'] < 30)

        <span class="status waspada">
             Waspada
        </span>

    @elseif ($item['tinggi'] <= 70)

        <span class="status siaga">
             Siaga
        </span>

    @else

        <span class="status awas">
             Awas
        </span>

    @endif

</div>