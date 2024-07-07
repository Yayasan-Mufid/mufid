<x-app-layout>

    <div class="mt-6 text-center">
        <a href="{{ route('kelas') }}"
            class="px-4 py-[10px] text-primary-700 border border-primary-700 bg-white hover:text-white hover:bg-primary-800 rounded-lg mr-4">
            Lihat Kelas
        </a>
        <button onclick="exportPDF()" class="px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">
            Download Sertifikat
        </button>
    </div>
    <div class="pt-6 mx-auto" style="width:1000px; height:1000px;">
        <div class="sertifikat mx-auto bg-white shadow-lg overflow-hidden"
            style="background: linear-gradient(to bottom, #ffcccc, #ffffff); width: 297mm; height: 210mm;">
            <div class="bg-primary-700 py-1">
            </div>
            <div class="p-6">
                <div class="text-center">
                    <img class="mx-auto mb-4" src="{{ url('/') }}/aset/img/logo-mia.png" alt="Logo"
                        style="max-width: 150px;">
                    <h1 class="text-3xl font-bold">Sertifikat Kelulusan</h1>
                    <p class="text-gray-700 text-lg">Diberikan kepada</p>
                    <h2 class="text-2xl font-bold text-gray-900">[Nama Peserta]</h2>
                    <p class="text-gray-700 text-lg">Atas keberhasilan menyelesaikan program pelatihan</p>
                    <h3 class="text-xl font-semibold text-gray-900">[Nama Program Pelatihan]</h3>
                    {{-- <p class="text-gray-700 text-lg">dengan jangka waktu</p>
                    <p class="text-gray-700 text-lg">[Tanggal Mulai] - [Tanggal Selesai]</p> --}}
                    <p class="text-gray-700 text-lg">dengan predikat</p>
                    <p class="text-2xl font-bold text-gray-900">ممتاز (Mumtaz)</p>
                </div>
                <div class="mt-6 text-sm">
                    <h4 class="font-semibold text-gray-900">Modul Tema yang Dipelajari:</h4>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li>Modul 1: [Nama Modul 1]</li>
                        <li>Modul 2: [Nama Modul 2]</li>
                        <li>Modul 3: [Nama Modul 3]</li>
                        <li>Modul 4: [Nama Modul 4]</li>
                        <li>Modul 5: [Nama Modul 5]</li>
                    </ul>
                </div>
                <div class="mt-6 text-center">
                    <p class="text-gray-700">Diberikan pada tanggal</p>
                    <p class="text-gray-700">[Tanggal Pemberian Sertifikat]</p>
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <div class="text-center">
                        <p class="text-gray-700">Instruktur</p>
                        <p class="text-gray-900 font-bold">[Nama Instruktur]</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-700">Direktur Program</p>
                        <p class="text-gray-900 font-bold">[Nama Direktur]</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function exportPDF() {
                const element = document.querySelector('.sertifikat');
                const opt = {
                    margin: 0,
                    image: { type: 'jpeg', quality: 1 },
                    filename: 'Sertifikat MIA.pdf',
                    html2canvas: { scale: 1, useCORS: true, scale: 4 },
                    jsPDF: { unit: 'mm', format: 'A4', orientation: 'landscape' },
                    pagebreak: { mode: ['avoid-all'] }
                };
                html2pdf().from(element).set(opt).save();
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    </div>
    <div class="py-4"></div>
</x-app-layout>
