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
                        <h3 class="text-xl font-semibold ">Pembayaran</h3>
                        <hr>
                        <ul class=" divide-gray-200 ">
                            @foreach ($data_pembayaran as $item)
                                @php
                                    $status_transaksi = [
                                            'MENUNGGU PEMBAYARAN' => 'bg-yellow-500',
                                            'MENUNGGU KONFIRMASI' => 'bg-orange-500',
                                            'LUNAS' => 'bg-green-500',
                                            'KADALUARSA' => 'bg-red-500',
                                    ];
                                @endphp
                                <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                    <div class="pb-2">
                                        <div class="flex items-center justify-between space-x-4">
                                            <div class="flow-root">
                                                <span class="{{ $status_transaksi[$item->status] }}  text-white px-2 rounded text-xs font-bold">{{ $item->status }}</span>
                                                <span class="block text-base font-semibold text-gray-900 truncate uppercase">
                                                    {{ $item->created_at->format('d M Y') }}
                                                </span>
                                            </div>
                                            <div class="flow-root">
                                                @if ($item->status == 'MENUNGGU PEMBAYARAN')
                                                    <x-carbon-cloud-upload class="w-8 h-8 text-yellow-500"/>
                                                @elseif ($item->status == 'MENUNGGU KONFIRMASI')
                                                    <x-carbon-information class="w-8 h-8 text-orange-500"/>
                                                @elseif ($item->status == 'LUNAS')
                                                    <x-carbon-checkmark-outline class="w-8 h-8 text-green-500"/>
                                                @elseif ($item->status == 'KADALUARSA')
                                                    <x-carbon-trash-can class="w-8 h-8 text-red-500"/>
                                                @endif
                                            </div>
                                        </div>
                                        <hr class="mt-2">
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <div class="flow-root">
                                            <Link href="{{ route('invoice.index', ['uuid' => $item->uuid]) }}" class="flex items-center px-2 py-1 gap-3 mr-3 text-sm font-medium justify-center text-sky-800 border border-sky-800 rounded-md ">
                                                <span class="hidden md:inline">{{ \Carbon\Carbon::parse($item->created_at)->format('Ymd') }}-{{ $item->id}}</span>
                                                <x-carbon-report class="w-6 h-6 text-sky-600"/>
                                            </Link>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <span class="block text-base font-semibold text-gray-900 truncate uppercase">
                                                {{ $item->peserta->nama }}
                                            </span>
                                            <span class="block text-sm font-normal text-gray-500 truncate ">
                                                Peserta {{ $item->periode->unit->nama }} Angkatan {{ $item->periode->angkatan }}
                                            </span>
                                        </div>
                                        <div class="flow-root">
                                            <span class="block text-sm font-normal text-gray-500 truncate ">
                                                TOTAL
                                            </span>
                                            <span class="block text-base font-semibold text-gray-900 truncate uppercase">
                                                {{ 'Rp. ' . number_format($item->nominal_total_pembayaran, 0, ',', '.') }}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="flow-root pb-4">
                        <div class="flex justify-end">
                            {{ $data_pembayaran->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
