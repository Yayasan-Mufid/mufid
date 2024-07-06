<x-app-layout>

  <section>
    <div class="py-6">
      <div class="max-w-7xl mx-auto px-10 sm:px-6 lg:px-8">
        <div class="">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Blog Content Column -->
            <div class="md:col-span-2">
              <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Informasi</h2>
                <div class="flex items-center">
                  <input type="text" placeholder="Cari konten..." class="px-4 py-2 border rounded-lg">
                  <button class="ml-2 px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Cari</button>
                </div>
              </div>
              <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <img class="w-full h-48 object-cover rounded-t-lg" src="https://via.placeholder.com/800x400" alt="Featured Image">
                <div class="p-4">
                  <h2 class="text-2xl font-bold text-gray-800">Judul Blog</h2>
                  <p class="text-gray-600 mt-2">Penggalan deskripsi konten blog yang menarik dan informatif...</p>
                  <p class="text-gray-500 text-sm mt-2">Diposting pada: 01 Januari 2023</p>
                  <p class="text-gray-500 text-sm mt-2">#hastag1 #hastag2 #hastag3</p>
                  <a href="#" class="inline-block mt-4 px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Read More</a>
                </div>
              </div>
              <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <img class="w-full h-48 object-cover rounded-t-lg" src="https://via.placeholder.com/800x400" alt="Featured Image">
                <div class="p-4">
                  <h2 class="text-2xl font-bold text-gray-800">Judul Blog</h2>
                  <p class="text-gray-600 mt-2">Penggalan deskripsi konten blog yang menarik dan informatif...</p>
                  <p class="text-gray-500 text-sm mt-2">Diposting pada: 01 Januari 2023</p>
                  <p class="text-gray-500 text-sm mt-2">#hastag1 #hastag2 #hastag3</p>
                  <a href="#" class="inline-block mt-4 px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Read More</a>
                </div>
              </div>
              <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <img class="w-full h-48 object-cover rounded-t-lg" src="https://via.placeholder.com/800x400" alt="Featured Image">
                <div class="p-4">
                  <h2 class="text-2xl font-bold text-gray-800">Judul Blog</h2>
                  <p class="text-gray-600 mt-2">Penggalan deskripsi konten blog yang menarik dan informatif...</p>
                  <p class="text-gray-500 text-sm mt-2">Diposting pada: 01 Januari 2023</p>
                  <p class="text-gray-500 text-sm mt-2">#hastag1 #hastag2 #hastag3</p>
                  <a href="#" class="inline-block mt-4 px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Read More</a>
                </div>
              </div>
              <div class="flex justify-between items-center mt-6">
                <button class="px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Halaman Sebelumnya</button>
                <button class="px-4 py-2 text-white bg-primary-700 hover:bg-primary-800 rounded-lg">Halaman Berikutnya</button>
              </div>
            </div>
            <!-- Sidebar Column -->
            <div class="md:col-span-1">
              <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">History Konten</h3>
                <ul class="space-y-4">
                  <li>
                    <a href="#" class="text-primary-700 hover:underline">Judul Konten Sebelumnya 1</a>
                    <p class="text-gray-600 text-sm">Penggalan deskripsi singkat...</p>
                  </li>
                  <li>
                    <a href="#" class="text-primary-700 hover:underline">Judul Konten Sebelumnya 2</a>
                    <p class="text-gray-600 text-sm">Penggalan deskripsi singkat...</p>
                  </li>
                  <li>
                    <a href="#" class="text-primary-700 hover:underline">Judul Konten Sebelumnya 3</a>
                    <p class="text-gray-600 text-sm">Penggalan deskripsi singkat...</p>
                  </li>
                  <li>
                    <a href="#" class="text-primary-700 hover:underline">Judul Konten Sebelumnya 4</a>
                    <p class="text-gray-600 text-sm">Penggalan deskripsi singkat...</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="py-6">
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
</x-app-layout>
