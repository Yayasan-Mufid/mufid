<x-layouts.dashboard.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Data Level <text class="uppercase">{{ $unit }}</text> </x-layouts.title>
        <div class="flex items-end justify-end pb-2">
            <Link modal max-width="lg" href="{{ route('admin.level.create', ['unit' => $unit]) }}" title=""
                class="mt-4 sm:mt-0 text-primary-700 font-medium rounded-lg border border-primary-700 text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                role="button">
                Tambah Data
                <x-carbon-add-alt class="w-5 h-5 ml-3 text-primary-700"/>
            </Link>
        </div>
        <x-splade-table :for="$table" />
    </x-layouts.card>
</x-layouts.dashboard.main>

