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
                    @isset($roles)
                    @hasanyrole($roles)
                        <div class="flow-root">
                            <h3 class="text-xl font-semibold ">Akses</h3>
                            <hr>
                            @foreach ($roleuser as  $item)
                                <ul class=" divide-gray-200 ">
                                    <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                        <div class="flex items-center space-x-4">
                                            {{-- <div class="flex-shrink-0">
                                                <img src="{{ url('/') }}/aset/img/logo-mia.png" width="40" alt="Logo M Mufid">
                                            </div> --}}

                                            <div class="flex-1 min-w-0">
                                                <span class="block text-base font-semibold text-gray-900 truncate ">
                                                    {{ $item['nama'] }}
                                                </span>
                                                <span class="block text-sm font-normal text-primary-500 truncate uppercase">
                                                    {{ $item['nama-unit'] }}
                                                </span>
                                            </div>
                                            <div class="md:inline-flex items-center">
                                                <a href="{{ url('/') }}{{ $item['url'] }}/{{ $item['unit'] }}" class="flex items-center px-3 py-2 gap-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                                                    <span class="hidden md:inline">Dashboard</span>
                                                    <x-carbon-arrow-right class="w-6 h-6 text-white"/>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    @endhasanyrole
                    @endisset

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
