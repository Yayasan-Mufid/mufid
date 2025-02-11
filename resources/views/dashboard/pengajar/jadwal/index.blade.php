<x-layouts.dashboard.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Jadwal <text class="uppercase">{{ $unit }}</text> </x-layouts.title>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-6">

            @foreach ($data_jadwal as $data)
                <div class="flex flex-col border justify-center bg-white rounded-lg">
                    <div class="max-w-md p-4 flex items-center justify-center text-center">
                        <x-carbon-event-schedule class="w-12 h-12 m-6 text-primary-700"/>
                    </div>
                    <div class="px-4">
                        <h3 class="text-xl font-semibold text-gray-900 ">ANGKATAN {{ $data->periode->angkatan }}</h3>
                        <p class="text-sm uppercase font-medium text-gray-700">{{ $data->hari_belajar }}, {{ $data->jam_mulai }}. {{ $data->status_belajar }}</p>
                        <p class="text-sm uppercase font-medium text-gray-700">{{ $data->level->nama }}</p>
                        <div class="gap-4 pb-4 sm:gap-2 sm:items-center sm:flex mt-4">
                            <Link href="{{ route('pengajar.jadwal.show', ['unit' => $unit, 'jadwal' => $data->id]) }}" title=""
                                class="text-primary-700 mt-4 sm:mt-0 border border-primary-700 font-medium rounded-lg text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                                role="button">
                                Lihat
                                <x-carbon-arrow-right class="w-4 h-4 ml-3 text-primary-700"/>
                            </Link>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        {{-- <x-splade-table :for="$table" /> --}}
    </x-layouts.card>
</x-layouts.dashboard.main>

