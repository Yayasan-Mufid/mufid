@props(['unit'])

<ul class="pb-2 space-y-2">
    <li>
        <x-link-item :href="route('admin.dashboard', ['unit' => $unit])" :active="request()->routeIs('admin.dashboard', ['unit' => $unit])">
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
    <li>
        <x-link-item :href="route('admin.periode.index', ['unit' => $unit])" :active="request()->routeIs('admin.periode.index', ['unit' => $unit])">
            @svg('carbon-data-unstructured', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Periode</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('admin.pengajar.index', ['unit' => $unit])" :active="request()->routeIs('admin.pengajar.index', ['unit' => $unit])">
            @svg('carbon-user-identification', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Pengajar</span>
        </x-link-item>
    </li>
    <li>
        <x-link-item :href="route('admin.level.index', ['unit' => $unit])" :active="request()->routeIs('admin.level.index', ['unit' => $unit])">
            @svg('carbon-increase-level', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Level</span>
        </x-link-item>
    </li>
    @if ($unit == 'mia')
        <li>
            <x-link-item :href="route('admin.pembelajaran.index', ['unit' => $unit])" :active="request()->routeIs('admin.pembelajaran.index', ['unit' => $unit])">
                @svg('carbon-data-center', 'text-gray-600 h-6 w-6')
                <span class="ml-3">Pembelajaran</span>
            </x-link-item>
        </li>
    @else
        <li>
            <x-link-item :href="route('admin.jadwal.index', ['unit' => $unit])" :active="request()->routeIs('admin.jadwal.index', ['unit' => $unit])">
                @svg('carbon-calendar', 'text-gray-600 h-6 w-6')
                <span class="ml-3">Jadwal</span>
            </x-link-item>
        </li>
    @endif
    <li>
        <x-link-item :href="route('admin.peserta.index', ['unit' => $unit])" :active="request()->routeIs('admin.peserta.index', ['unit' => $unit])">
            @svg('carbon-events-alt', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Peserta</span>
        </x-link-item>
    </li>
    {{-- <li>
        <x-link-item :href="route('admin.peserta.index', ['unit' => $unit])" :active="request()->routeIs('admin.peserta.index', ['unit' => $unit])">
            @svg('carbon-chart-custom', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Absensi</span>
        </x-link-item>
    </li> --}}
    <li>
        <x-link-item :href="route('admin.pembayaran.index', ['unit' => $unit])" :active="request()->routeIs('admin.pembayaran.index', ['unit' => $unit])">
            @svg('carbon-list-dropdown', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Pembayaran</span>
        </x-link-item>
    </li>
    {{-- <li>
        <x-link-item :href="route('superadmin.roles.index')" :active="request()->routeIs('superadmin.roles.index')">
            @svg('carbon-settings-services', 'text-gray-600 h-6 w-6')
            <span class="ml-3">Pengaturan</span>
        </x-link-item>
    </li> --}}
    <li>
        <x-link-item :href="route('admin.user.index', ['unit' => $unit])" :active="request()->routeIs('admin.user.index', ['unit' => $unit])">
            @svg('carbon-user-profile-alt', 'text-gray-600 h-6 w-6')
            <span class="ml-3">User Akun</span>
        </x-link-item>
    </li>
</ul>
