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
                    <div class="flow-root">
                        <h3 class="text-xl font-semibold dark:text-white">Akses</h3>
                        <hr>
                        <ul class=" divide-gray-200 dark:divide-gray-700">
                            <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img src="{{ url('/') }}/aset/img/logo-mia.png" width="40" alt="Logo M Mufid">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <span class="block text-base font-semibold text-gray-900 truncate dark:text-white">
                                            Admin
                                        </span>
                                        <span class="block text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Mufid Islam Academy
                                        </span>
                                    </div>
                                    <div class="md:inline-flex items-center">
                                        <a href="#" class="px-3 pt-2 pb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <span class="hidden md:inline">Masuk</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="md:ml-4 ml-0 h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img src="{{ url('/') }}/aset/img/logo-mia.png" width="40" alt="Logo M Mufid">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <span class="block text-base font-semibold text-gray-900 truncate dark:text-white">
                                            Muallim
                                        </span>
                                        <span class="block text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Mufid Islam Academy
                                        </span>
                                    </div>
                                    <div class="md:inline-flex items-center">
                                        <a href="#" class="px-3 pt-2 pb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <span class="hidden md:inline">Masuk</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="md:ml-4 ml-0 h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-slate-50 p-3 rounded-xl border my-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img src="{{ url('/') }}/aset/img/logo-mia.png" width="40" alt="Logo M Mufid">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <span class="block text-base font-semibold text-gray-900 truncate dark:text-white">
                                            Peserta
                                        </span>
                                        <span class="block text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Mufid Islam Academy
                                        </span>
                                    </div>
                                    <div class="md:inline-flex items-center">
                                        <Link modal href="{{ route('list.peserta') }}" class="px-3 pt-2 pb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <span class="hidden md:inline">Masuk</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="md:ml-4 ml-0 h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                          </Link>
                                    </div>
                                </div>
                            </li>

                            {{-- <li class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 dark:text-white" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <span class="block text-base font-semibold text-gray-900 truncate dark:text-white">
                                            Github account
                                        </span>
                                        <span class="block text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Not connected
                                        </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Connect</a>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <footer class="bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a href="#" class="hover:underline">Mufid</a>. All Rights Reserved.
                    </span>
                    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-900 dark:text-gray-400 sm:mt-0">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    @include('components.menu-mobile')

    <div class="py-4"></div>

</x-app-layout>
