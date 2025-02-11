<x-splade-modal :unit="$unit">
    <x-splade-form action="{{ route('admin.jadwal.import.store', ['unit' => $unit, 'jadwal' => $jadwal->id]) }}" method="POST" onkeydown="return event.key != 'Enter';"

    >
        @csrf


        <div class="relative">
            <x-forms.header>
                Import Data Peserta {{ $jadwal->nama_jadwal }}, {{ $jadwal->periode->nama }}
            </x-forms.header>

            <x-forms.body >
                <div class="grid grid-cols-1 gap-4 ">
                    <div class="flex items-end justify-end mb-4">
                        <a href="{{ asset('aset/import/Upload Peserta Tajwid Ikhwan - Mufid.xlsx') }}" download class=" flex items-center text-sm font-medium text-primary-600 hover:text-primary-700 transition duration-150 ease-in-out">
                            Download Contoh File Import Peserta
                            <x-carbon-download class="w-4 h-4 ml-2 text-primary-600"/>
                        </a>
                    </div>
                    <x-splade-file name="file" :label="__('Data File Excel Peserta')" accept=".xlsx" />
                </div>
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>

