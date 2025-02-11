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

            <div id="area_print" class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-neutral-800">
                <div class="flex flex-col">
                    <div class="text-end">
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                            Invoice # {{ $data->created_at->format('dmY') }}-{{ $data->id }}
                        </h2>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div>
                        <img src="{{ url('/') }}/aset/img/logo-mia.png" alt="Mufid" class="h-28">
                    </div>
                    <div class="text-end">
                        <address class="text-xs mt-4 not-italic text-gray-800 dark:text-neutral-200">
                            <text class="font-semibold ">Yayasan Mufid Balikpapan</text><br>
                            Komplek Masjid An-Nasai<br>
                            Jl. Syarifuddin Yoes RT 41 Balikpapan Selatan, <br>
                            Kota Balikpapan, Kalimantan Timur<br>
                            Phone: 0852-4789-8636
                        </address>

                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                {{-- @if ($pembayaran->status_pembayaran == 'unpaid') --}}
                    {{-- <div class="text-center">
                        <div class="font-semibold text-gray-800 dark:text-neutral-200">Batas Pembayaran</div>
                        <div class="text-primary-700 text-xl sm:text-3xl font-bold" id="countdown"></div>
                        <x-splade-script>
                            // Set the date we're counting down t
                            var countDownDate = new Date("2024-12-12 00:00:00").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                                // Get today's date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="countdown"
                                document.getElementById("countdown").innerHTML = hours + " Jam "
                                + minutes + " Menit " + seconds + " Detik ";

                                // If the count down is finished, write some text
                                if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("countdown").innerHTML = "EXPIRED";
                                }
                            }, 1000);
                        </x-splade-script>
                    </div> --}}
                {{-- @endif --}}


                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Kepada:</h3>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">{{ $data->peserta->nama }}</h3>

                        <address class="mb-2 not-italic text-gray-500 ">
                            <p>{{ $data->peserta->user->email ?? ''  }}</p>
                            <p>{{ $data->peserta->phone_number }}</p>
                        </address>
                    </div>
                    <!-- Col -->

                    <div class="sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Tanggal Invoice:
                                </dt>
                                <dd class="col-span-2 text-gray-500 ">{{ $data->created_at->format('d F Y') }}</dd>
                            </dl>

                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Status Pembayaran:</dt>
                                <dd class="col-span-2 text-gray-500  flex">
                                    @php
                                        $status_transaksi = [
                                            'MENUNGGU PEMBAYARAN' => 'bg-yellow-500',
                                            'MENUNGGU KONFIRMASI' => 'bg-orange-500',
                                            'LUNAS' => 'bg-green-500',
                                            'KADALUARSA' => 'bg-red-500',
                                        ]
                                    @endphp
                                        <span class="{{ $status_transaksi[$data->status] }}  text-white px-2 py-1 rounded text-sm">{{ $data->status }}</span>
                                </dd>
                            </dl>
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->
                <div class="flex items-center justify-center mt-6">
                    <div class="w-full md:w-2/5">
                        <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                            <div class="w-full text-center min-w-0 flex-1 space-y-2 md:max-w-md uppercase">
                                <h5 class=" text-xs font-medium text-gray-500 uppercase ">
                                    Program
                                </h5>
                                <h1 class="text-xl font-semibold text-gray-800 ">
                                    {{ $data->periode->unit->nama }}
                                </h1>
                                <h1 class="text-xs font-semibold text-gray-600 border rounded-lg p-2 ">
                                    {{ $data->periode->nama }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-0">
                    <div class=" rounded-lg space-y-4 dark:border-neutral-700">
                        <div class="rounded-lg bg-white p-2 md:p-4">

                        </div>
                        <div class="mt-5">
                            <ul class="mt-3 flex flex-col">
                                {{-- @foreach ($data->kelas->data_pembayaran as )

                                @endforeach --}}
                                @foreach ($data->detail_pembayaran['list_pembayaran'] as $item)
                                    <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                        <div class="flex items-center justify-between w-full">
                                            <span>{{ $item['label'] }}</span>
                                            <span>RP {{ number_format($item['value'], 0, ',', '.') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                                @if($data->kode_unik > 0)
                                    <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                        <div class="flex items-center justify-between w-full">
                                            <span>Kode Unik</span>
                                            <span>RP {{ number_format($data->kode_unik, 0, ',', '.') }}</span>
                                        </div>
                                    </li>
                                @endisset

                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Total Pembayaran</span>
                                        <span>RP {{ number_format($data->nominal_total_pembayaran, 0, ',', '.') }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Table -->
                <div class=" flex items-center justify-center">
                    <div class="mt-6 w-full md:w-2/5">
                        <div class="space-y-4 dark:border-neutral-700">
                                @if ($data->status == 'MENUNGGU PEMBAYARAN')
                                    <div class="border rounded-lg bg-white p-2 md:p-4">
                                        <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                                            <div class="w-full min-w-0 flex-1 md:max-w-md">
                                                <h5 class="text-xs font-medium text-gray-500 uppercase ">
                                                    Metode Pembayaran
                                                </h5>
                                                <div class="flex items-center justify-between mb-4">
                                                    <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline ">
                                                        Bank BSI
                                                    </h1>
                                                    {{-- <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline ">
                                                        @if($pembayaran->channel == 'QRIS' || $pembayaran->channel == 'MPM')
                                                            Scan QRIS
                                                        @else
                                                            Bank BSI
                                                        @endif
                                                    </h1> --}}
                                                    <img src="{{ url('/') }}/aset/pembayaran/bsi.png" alt="bsi" class="h-6 mr-2">
                                                </div>
                                                <h5 class="text-xs font-medium text-gray-500 uppercase ">
                                                    Nomor Rekening
                                                </h5>
                                                <div class="flex items-center justify-between mb-4">
                                                    <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline ">
                                                        {{-- {{ $pembayaran->payment_number }} --}}
                                                        123123
                                                    </h1>
                                                    <button id="copyButton" class="ml-2 border border-gray-200 px-2 py-1 rounded text-sm">Copy</button>
                                                    <x-splade-script>
                                                        document.addEventListener("DOMContentLoaded", function() {
                                                            document.getElementById('copyButton').addEventListener('click', function() {
                                                                var tempInput = document.createElement('input');
                                                                tempInput.value = '123123';
                                                                document.body.appendChild(tempInput);
                                                                tempInput.select();
                                                                document.execCommand('copy');
                                                                document.body.removeChild(tempInput);
                                                                alert('Nomor Virtual Akun berhasil disalin');
                                                            });
                                                        });
                                                    </x-splade-script>
                                                </div>
                                                {{-- @if($pembayaran->channel == 'QRIS' || $pembayaran->channel == 'MPM')
                                                    <h5 class="text-xs font-medium text-gray-500 uppercase ">
                                                        Barcode
                                                    </h5>
                                                    <h4 class="text-lg font-medium">
                                                        NMID : {{ $pembayaran->qris_nmid }}
                                                    </h4>
                                                    <div class="flex items-center justify-center mb-4">
                                                        <x-splade-lazy>
                                                            <x-slot:placeholder>Loading QRIS ...</x-slot:placeholder>
                                                            <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $pembayaran->qris_string }}&size=250x250" alt="QRIS" class="">
                                                        </x-splade-lazy>
                                                    </div>
                                                @else
                                                    <h5 class="text-xs font-medium text-gray-500 uppercase ">
                                                        Nomor Virtual Akun
                                                    </h5>
                                                    <div class="flex items-center justify-between mb-4">
                                                        <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline ">
                                                            {{ $pembayaran->payment_number }}
                                                        </h1>
                                                        <button id="copyButton" class="ml-2 border border-gray-200 px-2 py-1 rounded text-sm">Copy</button>
                                                        <x-splade-script>
                                                            document.addEventListener("DOMContentLoaded", function() {
                                                                document.getElementById('copyButton').addEventListener('click', function() {
                                                                    var tempInput = document.createElement('input');
                                                                    tempInput.value = '105000';
                                                                    document.body.appendChild(tempInput);
                                                                    tempInput.select();
                                                                    document.execCommand('copy');
                                                                    document.body.removeChild(tempInput);
                                                                    alert('Nomor Virtual Akun berhasil disalin');
                                                                });
                                                            });
                                                        </x-splade-script>
                                                    </div>
                                                @endif --}}
                                                <h5 class="text-xs font-medium text-gray-500 uppercase ">
                                                    Total Pembayaran
                                                </h5>
                                                <div class="flex items-center justify-between">
                                                    <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline ">
                                                        <span>RP {{ number_format($data->nominal_total_pembayaran, 0, ',', '.') }}</span>
                                                    </h1>
                                                    <button id="copyButtonTotal" class="ml-2 border border-gray-200 px-2 py-1 rounded text-sm">Copy</button>
                                                    <x-splade-script>
                                                        document.addEventListener("DOMContentLoaded", function() {
                                                            document.getElementById('copyButtonTotal').addEventListener('click', function() {
                                                                var tempInput = document.createElement('input');
                                                                tempInput.value = '{{ $data->nominal_total_pembayaran }}';
                                                                document.body.appendChild(tempInput);
                                                                tempInput.select();
                                                                document.execCommand('copy');
                                                                document.body.removeChild(tempInput);
                                                                alert('Total Nominal berhasil disalin');
                                                            });
                                                        });
                                                    </x-splade-script>
                                                </div>
                                                <hr class="mt-4">
                                                <x-splade-form action="{{ route('invoice.index', ['uuid' => '123123123']) }}"
                                                        confirm-text="Apakah file bukti transfer sudah benar ?"
                                                        confirm="Konfirmasi"
                                                        confirm-button="Benar"
                                                        cancel-button="Belum"
                                                        method="POST">
                                                        @csrf
                                                    <div class="my-4">
                                                        <span class="block mb-1 text-gray-700 font-sans"> Upload Bukti Transfer<span aria-hidden="true" class="text-red-600" title="This field is required">*</span></span>
                                                        <BuktiTransferUpload upload-url="{{ route('invoice.index', ['uuid' => '123123123']) }}"></BuktiTransferUpload>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <button type="submit" class="bg-primary-700 text-white py-2 px-5 rounded-lg">Konfirmasi Pembayaran </button>
                                                    </div>
                                                </x-splade-form>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($data->status == 'MENUNGGU KONFIRMASI')
                                    <div class="border rounded-lg bg-yellow-50 p-2 md:p-4">
                                        <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                                            <div class="w-full min-w-0 flex-1 md:max-w-md">
                                                <h1 class="text-lg text-center mt-0 font-semibold text-gray-900 hover:underline ">
                                                    Insya Allah , kami akan segera mengkonfirmasi pembayaran anda. Syukron
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($data->status == 'LUNAS')
                                <div class="border border-green-500 rounded-lg bg-white p-2 md:p-4">
                                    <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                                        <div class="w-full min-w-0 flex-1 md:max-w-md">
                                            <h1 class="text-lg text-center mt-0 font-semibold text-gray-900 hover:underline ">
                                                Jazakumullah Khoiran. Pembayaran selesai.
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                @elseif ($data->status == 'KADALUARSA')

                                @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <style>
                @media print {
                    body * {
                        visibility: hidden;
                    }
                    #contentToPrint, #contentToPrint * {
                        visibility: visible;
                    }
                    #contentToPrint {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }
                }
            </style>
            <div class="mt-6 flex justify-end gap-x-3">
                <button class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-neutral-800 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                    id="print">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9" />
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                        <rect width="12" height="8" x="6" y="14" />
                    </svg>
                    Invoice
                </button>
            </div>
            <x-splade-script>
                document.getElementById("print").addEventListener("click", function() {
                    var printContents = document.getElementById("area_print").innerHTML;
                    var originalContents = document.body.innerHTML;

                    document.body.innerHTML = printContents;

                    window.print();

                    document.body.innerHTML = originalContents;
                });
            </x-splade-script>
            <style>
                @media print {
                    #area_print {
                        page-break-after: always;
                    }
                }
            </style>
            <!-- End Buttons -->
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

