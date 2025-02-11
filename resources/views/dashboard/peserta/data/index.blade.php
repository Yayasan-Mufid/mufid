<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex md:flex-row flex-col">
                <div
                class="md:basis-1/4 border p-6 bg-white border-gray-200 rounded-xl hidden md:block md:mr-4 md:mb-0 mb-4">
                @include('components.menu-samping')
            </div>
            <div class="md:basis-3/4 border p-6 bg-white border-gray-200 rounded-xl">
                <div class="relative overflow-x-auto">
                    <div class="flow-root pb-4">
                        <h3 class="text-xl font-semibold ">Peserta</h3>
                        <hr>
                        <ul class=" divide-gray-200 ">
                            @foreach ($data_peserta as $item)
                                <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                    <div class="flex items-center space-x-4">
                                        <x-carbon-user class="w-6 h-6 text-primary-600"/>
                                        <div class="flex-1 min-w-0">
                                            <span class="block text-base font-semibold text-gray-900 truncate uppercase">
                                                {{ $item->nama }}
                                            </span>
                                            <span class="block text-sm font-normal text-gray-500 truncate ">
                                                Peserta {{ $item->periode->unit->nama }} Angkatan {{ $item->periode->angkatan }}
                                            </span>
                                        </div>
                                        <div class="flow-root">
                                            <Link href="{{ route('data.show', ['uuid' => $item->uuid]) }}" class="flex items-center px-2 py-1 gap-3 mr-3 text-sm font-medium justify-center text-primary-800 border border-primary-800 rounded-md ">
                                                <span class="hidden md:inline">Lihat</span>
                                                <x-carbon-arrow-right class="w-6 h-6 text-primary-600"/>
                                            </Link>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="flow-root pb-4">
                        <div class="flex justify-end">
                            {{ $data_peserta->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
