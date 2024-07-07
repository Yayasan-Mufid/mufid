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
                        <a class="flex items-center font-medium px-4 py-2 w-full rounded-lg border">
                            <span
                                class="w-8 h-8 bg-primary-600 text-white border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                            <h4 class="text-base font-bold text-primary-600">Pembayaran</h4>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a
                            class="flex items-center font-medium px-4 py-2 w-full rounded-lg border border-primary-400 bg-slate-50">
                            <span
                                class="w-8 h-8 bg-primary-600 text-white border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm  lg:w-10 lg:h-10">03</span>
                            <h4 class="text-base font-bold text-primary-600">Selesai</h4>
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
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-16 h-16 text-green-500 mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2l4-4"></path>
                                </svg>
                                <h2 class="text-2xl font-bold text-gray-900 mb-2">Pembayaran Berhasil</h2>
                                <p class="text-gray-700 mb-4">Terima kasih telah melakukan pembayaran. Selamat bertemu
                                    di kelas!</p>
                            </div>
                        </div>
                        <div class="flex justify-center pt-6">
                            <Link href="{{ route('dashboard') }}"
                                class="px-4 py-2 bg-primary-700 text-white rounded-md hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                            Kembali ke Dashboard
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
