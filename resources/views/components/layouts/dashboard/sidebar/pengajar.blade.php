@props(['unit'])

<ul class="pb-2 space-y-2">
    <li>
        <x-link-item :href="route('pengajar.dashboard', ['unit' => $unit])" :active="request()->routeIs('pengajar.dashboard', ['unit' => $unit])">
            @svg('carbon-dashboard', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Dashboard</span>
        </x-link-item>
    </li>
    {{-- <li>
        <Link href="divisi"
            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group hover:border hover:border-gray-500 border border-transparent">
        @svg('carbon-send-alt', 'text-gray-600 h-6 w-6')
        <span class="ml-3">Pemberitahuan</span>
        </Link>
    </li> --}}
    @if ($unit == 'mia')
        <li>
            <x-link-item :href="route('pengajar.pembelajaran.index', ['unit' => $unit])" :active="request()->routeIs('pengajar.pembelajaran.index', ['unit' => $unit])">
                @svg('carbon-data-center', 'text-gray-600 h-6 w-6')
                <span class="ml-3">Pembelajaran</span>
            </x-link-item>
        </li>
    @else
        <li>
            <x-link-item :href="route('pengajar.jadwal.index', ['unit' => $unit])" :active="request()->routeIs('pengajar.jadwal.index', ['unit' => $unit])">
                @svg('carbon-calendar', 'text-gray-600 h-6 w-6')
                <span class="ml-3">Jadwal</span>
            </x-link-item>
        </li>
    @endif
    <li>
        <x-link-item :href="route('pengajar.peserta.index', ['unit' => $unit])" :active="request()->routeIs('pengajar.peserta.index', ['unit' => $unit])">
            @svg('carbon-events-alt', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Peserta</span>
        </x-link-item>
    </li>
    {{-- <li>
        <x-link-item :href="route('pengajar.peserta.index', ['unit' => $unit])" :active="request()->routeIs('pengajar.peserta.index', ['unit' => $unit])">
            @svg('carbon-chart-custom', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Absensi</span>
        </x-link-item>
    </li> --}}
    {{-- <li>
        <x-link-item :href="route('superpengajar.roles.index')" :active="request()->routeIs('superpengajar.roles.index')">
            @svg('carbon-settings-services', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Pengaturan</span>
        </x-link-item>
    </li> --}}
    {{-- <li>
        <x-link-item :href="route('pengajar.user.index', ['unit' => $unit])" :active="request()->routeIs('pengajar.user.index', ['unit' => $unit])">
            @svg('carbon-user-profile-alt', 'text-gray-600 h-6 w-6')
            <span class="ml-3">User Akun</span>
        </x-link-item>
    </li> --}}
</ul>
