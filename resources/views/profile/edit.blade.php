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
              <div class="md:basis-3/4 ">
                  <div class="flow-root">
                    <div class=" mx-auto  space-y-6">
                      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                          <div class="max-w-xl" dusk="update-profile-information">
                              @include('profile.partials.update-profile-information-form')
                          </div>
                      </div>

                      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                          <div class="max-w-xl" dusk="update-password">
                              @include('profile.partials.update-password-form')
                          </div>
                      </div>

                      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                          <div class="max-w-xl" dusk="delete-user">
                              @include('profile.partials.delete-user-form')
                          </div>
                      </div>
                  </div>
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
