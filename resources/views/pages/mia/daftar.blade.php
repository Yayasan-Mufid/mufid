<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

          <h1 class="text-2xl font-bold text-center py-4">Pendaftaran MIA</h1>
          <!-- <div class="flex flex-col border justify-center bg-white rounded-xl items-center mb-4">
              <div class="rounded-lg bg-white p-2 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-4">
                   <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                      <a href="#" class="shrink-0">
                          <img class="w-28 p-2 sm:p-3" src="https://admin.entrepreneurid.org/img/produk/KPS-2024-1.png">
                      </a>

                      <div class="w-full min-w-0 flex-1 space-y-2 md:max-w-md">
                          <h1 class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">
                              Kelas Profit 10 Juta
                          </h1>
                          <div class="space-y-0">
                              <h1 class="text-lg font-normal text-primary-900 hover:underline dark:text-white">
                                  <strike>Rp. 183.000</strike>
                              </h1>
                              <h1 class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">
                                  Rp. 123.000
                              </h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <x-splade-form action="#" class="space-y-4"
              confirm-text="Apakah data yang anda masukkan sudah benar ?" confirm="Konfirmasi" confirm-button="Benar"
              cancel-button="Belum" method="POST">

              <div class="container mx-auto py-8">
                  <div class="max-w-lg mx-auto bg-white rounded-lg ">
                      <!-- <h2 class="text-2xl font-bold mb-6 text-center">Pilih Materi Belajar</h2> -->

                      <div class="mb-4">
                          <h3 class="text-lg font-semibold mb-2">Level Belajar</h3>
                          <x-splade-group class="space-y-4" name="level">
                              <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:border-primary-700">
                                  <x-splade-checkbox name="level[]" value="1" class="mr-2" data-fee="100000"/>
                                  <span class="ml-2 text-gray-900 ">
                                    <div class="font-bold">
                                      Level 1
                                    </div>
                                    <div>
                                      Rp 100,000
                                    </div>
                                  </span>
                              </label>
                              <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:border-primary-700">
                                  <x-splade-checkbox name="level[]" value="2" class="mr-2" data-fee="100000"/>
                                  <span class="ml-2 text-gray-900 ">
                                    <div class="font-bold">
                                      Level 2
                                    </div>
                                    <div>
                                      Rp 100,000
                                    </div>
                                  </span>
                              </label>
                              <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:border-primary-700">
                                  <x-splade-checkbox name="level[]" value="3" class="mr-2" data-fee="100000"/>
                                  <span class="ml-2 text-gray-900 ">
                                    <div class="font-bold">
                                      Level 3
                                    </div>
                                    <div>
                                      Rp 100,000
                                    </div>
                                  </span>
                              </label>
                              <label class="flex items-center p-4  border rounded-lg cursor-pointvel 1 (Rp 100,000)er hover:border-primary-700">
                                  <x-splade-checkbox name="level[]" value="4" class="mr-2" data-fee="100000"/>
                                  <span class="ml-2 text-gray-900 ">
                                    <div class="font-bold">
                                      Level 4
                                    </div>
                                    <div>
                                      Rp 100,000
                                    </div>
                                  </span>
                              </label>
                              <label class="flex items-center p-4  border rounded-lg cursor-pointer hover:border-primary-700">
                                  <x-splade-checkbox name="level[]" value="5" class="mr-2" data-fee="100000"/>
                                  <span class="ml-2 text-gray-900 ">
                                    <div class="font-bold">
                                      Level 5
                                    </div>
                                    <div>
                                      Rp 100,000
                                    </div>
                                  </span>
                              </label>
                          </x-splade-group>
                      </div>
                  </div>
              </div>
              <div class="flex items-center justify-center pb-4">
                  <x-splade-submit class="bg-primary-700 text-white" :label="__('Proses Pendaftaran')" />
              </div>
              <!-- <div class="flex items-center justify-end py-10">
                  <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                  {{ __('Login') }}
                  </Link>
              </div> -->
          </x-splade-form>
      </div>
    </div>
    <div class="py-6 bg-gray-100"></div>
</x-app-layout>
