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
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <!-- Card header -->
                            <div class="items-center justify-between lg:flex">
                                <div class="mb-4 lg:mb-0">
                                    <h3 class="mb-2 text-xl font-bold text-gray-900">Riwayat Pembayaran</h3>
                                </div>
                                <div class="items-center sm:flex">
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="flex flex-col mt-6">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Kode Pembayaran
                                                        </th>
                                                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Date &amp; Time
                                                        </th>
                                                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Nominal (Rp)
                                                        </th>
                                                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">

                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white dark:bg-gray-800">
                                                    <tr>
                                                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                            0047568936
                                                        </td>
                                                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            Apr 23 ,2021
                                                        </td>
                                                        <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                                                            Rp 300.000
                                                        </td>
                                                        <td class="p-4 whitespace-nowrap">
                                                            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                                        </td>
                                                        <td class="p-4 whitespace-nowrap">
                                                            <Link href="{{ route('kelas') }}" class=" py-2 px-4 text-sm font-medium text-primary-700 hover:text-white bg-white border border-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                                                                Lihat Invoice
                                                            </Link>
                                                        </td>
                                                    </tr>
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

</x-app-layout>
