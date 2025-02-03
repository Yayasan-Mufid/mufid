<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    {{-- <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header> --}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <footer class="bg-white rounded-lg shadow ">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a href="#" class="hover:underline">Mufid</a>. All Rights Reserved.
                </span>
                {{-- <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-900 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul> --}}
            </div>
        </footer>
    </div>

    @include('components.menu-mobile')

    <div class="py-4"></div>
</div>
