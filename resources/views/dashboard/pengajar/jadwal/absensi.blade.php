<x-layouts.dashboard.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Data Jadwal <text class="uppercase">{{ $unit }}</text>, {{ $jadwal->nama_jadwal }} - {{ $jadwal->periode->nama }} </x-layouts.title>
        <div class="py-4">

            <div class="overflow-x-auto">
                <h3 class="text-lg font-medium text-center py-2 text-gray-800 dark:text-white p-2 underline">
                    Pertemuan Ke-{{ $absenke }}
                </h3>
                <form action="{{ route('pengajar.jadwal.absensi.update', ['unit' => $unit, 'jadwal' => $jadwal->id, 'absenke' => $absenke]) }}" method="POST">
                    @csrf
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Peserta
                                </th>
                                <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Absensi
                                </th>
                                <!-- Add more columns as needed -->
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($pesertas as $peserta)
                                    <tr>
                                        <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900 uppercase">
                                            {{ $peserta->peserta->nama }}
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                            <select name="keterangan{{ $peserta->id }}" class="px-3 py-2 text-base text-gray-700 mr-2 bg-white border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-primary-500 focus:border-primary-500" required>
                                                    <option value="HADIR">HADIR</option>
                                                    <option value="IZIN">IZIN</option>
                                                    <option value="SAKIT">SAKIT</option>
                                                    <option value="TIDAK HADIR">TIDAK HADIR</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-center mt-4">
                        <button type="submit" class="bg-primary-500 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded">
                            Simpan Absensi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-layouts.card>
</x-layouts.dashboard.main>

