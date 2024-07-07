<x-app-layout>
    <div class="pt-6 pb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0  ">
                    <li class="flex-1 ">
                        <a href="#" class="flex items-center font-medium px-4 py-2 w-full rounded-lg border">
                            <span
                                class="w-8 h-8 bg-primary-600  rounded-full flex justify-center items-center mr-3 text-sm text-white lg:w-10 lg:h-10">01</span>
                            <h4 class="text-base font-bold text-primary-600">Data Peserta</h4>
                        </a>
                    </li>
                    <li class="flex-1 ">
                        <a
                            class="flex items-center font-medium px-4 py-2 w-full rounded-lg border border-primary-400 bg-slate-50">
                            <span
                                class="w-8 h-8 bg-primary-600 text-white border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                            <h4 class="text-base font-bold text-primary-600">Pembayaran</h4>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a class="flex items-center font-medium px-4 py-2 w-full rounded-lg ">
                            <span
                                class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm  lg:w-10 lg:h-10">03</span>
                            <h4 class="text-base  text-gray-900">Selesai</h4>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="pt-3 pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="mt-6">
                    <form>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nominal</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white ">
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium text-gray-900">
                                            Biaya Pendaftaran</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 100.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium text-gray-900">
                                            Biaya Bulanan</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 100.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium text-gray-900">
                                            Tambahan Kode Unik</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 123</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-lg text-right font-bold text-gray-900">
                                            Total Nominal</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg font-bold text-gray-900">Rp
                                            200.123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex justify-between pt-6">
                            <button type="button"
                                class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-800 focus:ring-4 focus:ring-gray-300">Kembali</button>
                            <Link href="{{ route('program.pendidikan.selesai') }}"
                                class="px-4 py-2 bg-primary-700 text-white rounded-md hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                            Lanjutkan
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
