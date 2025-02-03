<x-layouts.dashboard.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Data Pembelajaran <text class="uppercase">{{ $unit }}</text> </x-layouts.title>
            <div class="flex items-end justify-end">
                <Link modal max-width="lg" href="{{ route('admin.pembelajaran.create', ['unit' => $unit]) }}" title=""
                    class="mt-4 sm:mt-0 text-primary-700 font-medium rounded-lg border border-primary-700 text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                    role="button">
                    Tambah Data
                    <x-carbon-add-alt class="w-5 h-5 ml-3 text-primary-700"/>
                </Link>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6">
                <div class="flex flex-col border justify-center bg-white rounded-xl">
                    <img class="max-w-md p-4" src="https://placehold.co/600x400">
                    <div class="px-4">
                        <p class="text-sm lg:text-lg font-medium text-gray-700">Rp. 400.000</p>
                        <h1 class="text-md lg:text-2xl font-medium text-gray-700">Kitab Sholat Part 1</h1>
                        <p class="text-xs lg:text text-gray-500 leading-6">Kelas Online Pembelajaran Fiqih</p>
                        <div class="gap-4 pb-4 sm:gap-2 sm:items-center sm:flex mt-4">
                            <Link href="{{ route('program.pendidikan.daftar') }}" title=""
                                class="text-white mt-4 sm:mt-0 bg-primary-700 font-medium rounded-lg text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                                role="button">
                                Edit
                                <x-carbon-pen class="w-4 h-4 ml-3 text-white"/>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
    </x-layouts.card>
</x-layouts.dashboard.main>

