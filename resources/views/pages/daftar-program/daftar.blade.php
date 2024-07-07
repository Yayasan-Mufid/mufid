<x-app-layout>
    <div class="pt-6 pb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0  ">
                    <li class="flex-1 ">
                        <a href="#"
                            class="flex items-center font-medium px-4 py-2 w-full rounded-lg border border-primary-400 bg-slate-50">
                            <span
                                class="w-8 h-8 bg-primary-600  rounded-full flex justify-center items-center mr-3 text-sm text-white lg:w-10 lg:h-10">01</span>
                            <h4 class="text-base font-bold text-primary-600">Data Peserta</h4>
                        </a>
                    </li>
                    <li class="flex-1 ">
                        <a class="flex items-center font-medium px-4 py-2 w-full">
                            <span
                                class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                            <h4 class="text-base  text-gray-900">Pembayaran</h4>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a class="flex items-center font-medium px-4 py-2 w-full">
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
                    <form action="{{ route('program.pendidikan.pembayaran') }}" method="GET">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="mb-2">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </div>
                            <div class="mb-2">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <input type="text" id="alamat" name="alamat"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </div>
                            <div class="mb-2">
                                <label for="telepon" class="block text-sm font-medium text-gray-700">Telepon</label>
                                <input type="text" id="telepon" name="telepon"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="flex justify-end pt-6">
                            <Link href="{{ route('program.pendidikan.pembayaran') }}"
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
