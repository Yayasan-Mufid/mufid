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
                <div class="md:basis-3/4 ">
                    <div class="">
                        <div class="mx-auto">
                            <div class="grid grid-cols-1 px-4 md:grid-cols-3 md:gap-4 dark:bg-gray-900">
                                <!-- Right Content -->
                                <div class="col-span-full sm:col-auto">
                                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                        <div class="items-center flex space-x-4">
                                            <x-carbon-user-avatar-filled-alt class="w-20 h-20 text-primary-700"/>
                                            <div>
                                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Peserta {{ $peserta->unit->nama }}</h3>
                                                <div class="mb-1 text-sm text-gray-500 dark:text-gray-400">
                                                    {{ $peserta->nama }}
                                                </div>
                                                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                                    {{ $peserta->phone_number }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Biodata</h3>
                                        <ul class="grid grid-cols-6 gap-2  dark:divide-gray-700">
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Nama
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->nama }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Tanggal Lahir
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->tanggal_lahir }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Jenis Peserta
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->jenis_peserta }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Kota
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->biodata['kota_domisili'] ?? '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Pekerjaan
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->biodata['kota_pekerjaan'] ?? '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-span-3 py-2">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                            Alamat
                                                        </p>
                                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                            {{ $peserta->biodata['kota_alamat'] ?? '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                        <div class="flow-root">
                                            <h3 class="text-xl mb-4 font-semibold dark:text-white">{{ $peserta->periode->unit->nama }} {{ $peserta->periode->nama }}</h3>

                                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Absensi</h3>
                                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead>
                                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                                            @for ($i = 1; $i <= 16; $i++)
                                                                <th scope="col"
                                                                    class="px-3 py-3 text-center font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                    {{ $i }}
                                                                </th>
                                                            @endfor
                                                            <th scope="col"
                                                                    class="px-3 py-3 text-center font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                    Ujian
                                                                </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-gray-900 ">
                                                            @for($i = 1; $i <= 16; $i++)
                                                                <td class="text-center p-2 uppercase text-xs font-bold">
                                                                    @if(array_key_exists($i, $peserta->kelas->data_absensi))
                                                                        {{ $peserta->kelas->data_absensi[$i] == "" ? '-' : $peserta->kelas->data_absensi[$i] }}
                                                                    @else
                                                                        -
                                                                    @endif
                                                                </td>
                                                            @endfor
                                                            <td class="text-center p-2 uppercase text-xs font-bold">
                                                                @if(array_key_exists('ujian', $peserta->kelas->data_absensi))
                                                                    {{ $peserta->kelas->data_nilai['ujian'] == "" ? '-' : $peserta->kelas->data_nilai['ujian'] }}
                                                                @else
                                                                    -
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Pembayaran</h3>
                                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead>
                                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                                            <th scope="col"
                                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                Jenis Pembayaran
                                                            </th>
                                                            <th scope="col"
                                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                Status
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                            <td class="px-3 py-3 uppercase">
                                                                PENDAFTARAN
                                                            </td>
                                                            <td class="px-3 py-3 uppercase">
                                                                {{ $peserta->kelas->data_pembayaran['pendaftaran'] != '' ? 'LUNAS' : '' }}
                                                            </td>
                                                        </tr>
                                                        @for($i = 1; $i <= 4; $i++)
                                                            <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                                <td class="px-3 py-3 uppercase">
                                                                    SPP BULAN {{ $i }}
                                                                </td>
                                                                <td class="px-3 py-3 uppercase">
                                                                    {{ $peserta->kelas->data_pembayaran['spp' . $i] != '' ? 'LUNAS' : '' }}
                                                                </td>
                                                            </tr>
                                                        @endfor
                                                    </tbody>
                                                </table>
                                            </div>

                                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Riwayat Pembayaran</h3>
                                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead>
                                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                                            <th scope="col"
                                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                Invoice
                                                            </th>
                                                            <th scope="col"
                                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                Waktu
                                                            </th>
                                                            <th scope="col"
                                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                                Status
                                                            </th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($peserta->transaksi as $transaksi_)
                                                            @php
                                                                $status_transaksi = [
                                                                        'MENUNGGU PEMBAYARAN' => 'bg-yellow-500',
                                                                        'MENUNGGU KONFIRMASI' => 'bg-orange-500',
                                                                        'LUNAS' => 'bg-green-500',
                                                                        'KADALUARSA' => 'bg-red-500',
                                                                ];
                                                            @endphp
                                                            <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                                <td class="px-3 py-3">
                                                                    {{ \Carbon\Carbon::parse($transaksi_->created_at)->format('Ymd') }}-{{ $transaksi_->id}}
                                                                </td>
                                                                <td class="px-3 py-4">
                                                                    {{ $transaksi_->created_at->format('d M Y') }}
                                                                </td>
                                                                <td class="px-3 py-4">
                                                                    <span class="{{ $status_transaksi[$transaksi_->status] }}  text-white px-2 py-1 rounded text-xs font-bold">{{ $transaksi_->status }}</span>
                                                                </td>
                                                                <td class="px-3 py-4">
                                                                    <Link href="{{ route('invoice.index', ['uuid' => $transaksi_->uuid]) }}" class="flex items-center px-2 py-1 gap-3 mr-3 text-sm font-medium justify-center text-sky-800 border border-sky-800 rounded-md ">
                                                                        <span class="hidden md:inline">Invoice</span>
                                                                        <x-carbon-report class="w-6 h-6 text-sky-600"/>
                                                                    </Link>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

