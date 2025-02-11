<x-splade-modal :unit="$unit">
    <x-splade-form action="{{ route('admin.level.store', ['unit' => $unit]) }}" method="POST" onkeydown="return event.key != 'Enter';"
        :default="[
            // 'aktifkan_pendaftaran' => 0,
        ]"
    >
        @csrf

        <div class="relative">
            <x-forms.header>
                Tambah Data Level
            </x-forms.header>

            <x-forms.body >

            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>

