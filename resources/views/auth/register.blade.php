<x-guest-layout>
    <x-auth-card>
        <x-splade-form action="{{ route('register') }}" class="space-y-4" confirm="Konfirmasi"
        confirm-text="Apakah Nomor Sudah Benar ?"
        confirm-button="Benar"
        cancel-button="Belum"
        >
            <div class="flex items-center">
                @include('auth.phone-code')
            </div>
            <div class="flex items-center">
                <div class="relative w-full">
                    <x-splade-input type="tel" name="phone_number" size="20" minlength="9" maxlength="14"
                        class="block px-0 w-full text-center italic text-3xl text-gray-900 bg-transparent appearance-none peer"
                        placeholder="Masukkan Nomor Handphone : 081234567 " required autofocus/>
                </div>
            </div>

            <div class="flex items-center justify-end ">
                <div class="text-sm text-gray-500">
                    Contoh : 08123456789
                </div>
            </div>
            <x-splade-input id="name" type="text" name="name" :label="__('Nama')" required  />
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
            <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Konfirmasi Password')" required />

            <div class="flex items-center justify-end">
                <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Login
                </Link>

                <x-splade-submit class="ml-4" :label="__('Daftar Akun')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
