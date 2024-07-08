<ul class="list-none p-0">
  <li class="border-b border-gray-200 hover:bg-gray-100">
      <Link href="{{ route('dashboard') }}" class="flex items-center space-x-4 p-4 block {{ request()->routeIs('dashboard') ? 'bg-slate-50 text-primary-600' : '' }}">
          <x-carbon-dashboard class="w-6 h-6 {{ request()->routeIs('dashboard') ? 'text-primary-600' : '' }}" />
          <div>
              <h6 class="text-sm font-semibold dark:text-white {{ request()->routeIs('dashboard') ? 'text-primary-600' : 'text-gray-900' }}">Dasboard</h6>
          </div>
        </Link>
  </li>
  <li class="border-b border-gray-200 hover:bg-gray-100">
      <Link href="{{ route('data') }}" class="flex items-center space-x-4 p-4 block {{ request()->routeIs('data') ? 'bg-slate-50 text-primary-600' : '' }}">
          <x-carbon-data-1 class="w-6 h-6 {{ request()->routeIs('data') ? 'text-primary-600' : '' }}"/>
          <div>
              <h6 class="text-sm font-semibold dark:text-white {{ request()->routeIs('data') ? 'text-primary-600' : 'text-gray-900' }}">Data</h6>
          </div>
        </Link>
  </li>
  <li class="border-gray-200 hover:bg-gray-100">
      <Link href="{{ route('pembayaran') }}" class="flex items-center space-x-4 p-4 block {{ request()->routeIs('pembayaran') ? 'bg-slate-50 text-primary-600' : '' }}">
          <x-carbon-money class="w-6 h-6 {{ request()->routeIs('pembayaran') ? 'text-primary-600' : '' }}"/>
          <div>
              <h6 class="text-sm font-semibold dark:text-white {{ request()->routeIs('pembayaran') ? 'text-primary-600' : 'text-gray-900' }}">Pembayaran</h6>
          </div>
        </Link>
  </li>
  <li class="py-5"></li>
  <li class="border-b border-gray-200 hover:bg-gray-100">
      <Link href="{{ route('profile.edit') }}" class="flex items-center space-x-4 p-4 block {{ request()->routeIs('profile.edit') ? 'bg-slate-50 text-primary-600' : '' }}">
          <x-carbon-user-profile class="w-6 h-6 {{ request()->routeIs('profile.edit') ? 'text-primary-600' : '' }}"/>
          <div>
              <h6 class="text-sm font-semibold dark:text-white {{ request()->routeIs('profile.edit') ? 'text-primary-600' : 'text-gray-900' }}">Akun</h6>
          </div>
        </Link>
  </li>
  <li class="border-gray-200 hover:bg-gray-100">
      <Link href="{{ route('logout') }}" class="flex items-center space-x-4 p-4 block {{ request()->routeIs('logout') ? 'bg-slate-50 text-primary-600' : '' }}">
          <x-carbon-logout class="w-6 h-6 {{ request()->routeIs('logout') ? 'text-primary-600' : '' }}" />
          <div>
              <h6 class="text-sm font-semibold dark:text-white {{ request()->routeIs('logout') ? 'text-primary-600' : 'text-gray-900' }}">Logout</h6>
          </div>
        </Link>
  </li>
</ul>
