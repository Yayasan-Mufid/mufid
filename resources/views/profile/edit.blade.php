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
                        <div class="max-w-xl" dusk="update-profile-information">
                            @include('profile.partials.update-phone')
                        </div>
                    </div>

                      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                          <div class="max-w-xl" dusk="update-password">
                              @include('profile.partials.update-password-form')
                          </div>
                      </div>

                      {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                          <div class="max-w-xl" dusk="delete-user">
                              @include('profile.partials.delete-user-form')
                          </div>
                      </div> --}}
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</x-app-layout>
