<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex md:flex-row flex-col">
                <div class="md:basis-1/4 border p-6 bg-white border-gray-200 rounded-xl hidden md:block md:mr-4 md:mb-0 mb-4">
                    @include('components.menu-samping')
                </div>
                <div class="md:basis-3/4 border p-6 bg-white border-gray-200 rounded-xl">
                    <div class="flow-root pb-6">
                        <div class="mx-auto">
                            @php
                            $slides = [
                            ['url' => 'https://mufid.or.id/wp-content/uploads/2020/12/banner-angkatan-2.jpg', 'link' => 'https://mufid.or.id/wp-content/uploads/2020/12/banner-angkatan-2.jpg'],
                            ['url' => 'https://mufid.or.id/wp-content/uploads/2023/06/BANNER-WEB-ADHA.png', 'link' => '#'],
                            ['url' => 'https://mufid.or.id/wp-content/uploads/2024/06/WhatsApp-Image-2024-06-21-at-11.02.47-1024x1024.jpeg', 'link' => '#'],
                            ['url' => 'https://mufid.or.id/wp-content/uploads/2020/04/3.jpg', 'link' => '#'],
                            ['url' => 'https://mufid.or.id/wp-content/uploads/2020/04/2.jpg', 'link' => '#']
                            ];
                            @endphp
                            <CarouselSlider :initial-slides="{{ json_encode($slides) }}" />
                        </div>
                    </div>
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
                                            <Link modal href="{{ route('list.peserta') }}" class="flex items-center px-2 py-1 gap-3 mr-3 text-sm font-medium justify-center text-primary-800 border border-primary-800 rounded-md ">
                                                <span class="hidden md:inline">Lihat</span>
                                                <x-carbon-arrow-right class="w-6 h-6 text-primary-600"/>
                                            </Link>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
