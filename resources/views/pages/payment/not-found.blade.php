{{-- <p class="text-center text-sm text-gray-600">
    Halaman ini akan refresh secara automatis setiap 2 menit untuk memeriksa pembayaran
</p>
<x-splade-script>
    document.addEventListener("DOMContentLoaded", function() {
        setInterval(function() {
            location.reload();
        }, 120000); // 120000 milliseconds = 2 minutes
    });
</x-splade-script> --}}



<div class="bg-gray-100">
    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/') }}" class="text-md text-gray-600 hover:text-gray-900">
            &larr; Kembali
            </Link>
        </p>
    </div>

    <div class="max-w-[70rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto">

            <div  class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-neutral-800">
                <div class="flex flex-col">
                    <div class="text-center">
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                            Invoice Tidak Ditemukan
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Invoice -->

    <div class="text-center py-8 bg-gray-100">
        <div class="flex items-center justify-center">
            <img src="{{ url('/') }}/aset/pembayaran/SSL-Secured.svg" alt="ssl" class="h-24 pt-3">
            {{-- <img class="h-12 mt-5 rounded-md" src="https://ipaymu.com/wp-content/themes/ipaymu_v2/assets/new-assets/image/iPaymu-PCIDSS.jpeg" alt="ipaymu"> --}}
        </div>
        <p class="text-sm text-gray-600">
            &copy; {{ date('Y') }} Mufid. All rights reserved.
        </p>
    </div>
</div>

