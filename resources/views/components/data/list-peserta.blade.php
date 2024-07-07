<x-splade-modal>
<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <tbody>
          <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Muhammad Fikri
              </th>
              <td class="px-6 py-4">
                  Sedang Dalam Pembelajaran
              </td>
              <td class="px-6 py-4">
                <Link href="{{ route('kelas') }}" class="py-2.5 px-5 text-sm font-medium text-primary-700 hover:text-white bg-white border border-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                    Pilih
                </Link>
              </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Suratno
              </th>
              <td class="px-6 py-4">
                <span class="text-green-500">
                  Selesai
                </span>
              </td>
              <td class="px-6 py-4">
                <a href="{{ route('sertifikat') }}"  class="py-2.5 px-5 text-sm font-medium text-primary-700 hover:text-white bg-white border border-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                  Pilih
                </a>
              </td>
          </tr>
      </tbody>
  </table>
</div>
</x-splade-modal>
