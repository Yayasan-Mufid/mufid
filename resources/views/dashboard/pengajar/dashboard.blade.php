<x-layouts.dashboard.main :unit="$unit">
    <x-layouts.card>
        Selamat datang, di Dashboard
            @if ($unit == 'tajwid-akhwat')
                Muallimah
            @elseif ($unit == 'tajwid-ikhwan')
                Muallim
            @else
                Muallim / Muallimah
            @endif
            <text class="uppercase"> {{ str_replace('-', ' ', $unit) }} </text>
    </x-layouts.card>
</x-layouts.dashboard.main>

