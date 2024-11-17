<nav x-data="{ open: false }" id="menu" class="bg-secondary border-b border-gray-100 text-black">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('product')" :active="request()->routeIs('product')" wire:navigate>
                        {{ __('Productos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('podcast')" :active="request()->routeIs('podcast')" wire:navigate>
                        {{ __('Podcast') }}
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')" wire:navigate>
                        {{ __('Servicios') }}
                    </x-nav-link>
                    <x-nav-link href="https://notasweb.me" target="_blank">
                        {{ __('Blog') }}
                    </x-nav-link>
                    <!-- Dropdown Menu -->
                    <div class="relative group items-center hidden mt-12 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="#" class="cursor-pointer">
                            {{ __('Más') }}
                        </x-nav-link>
                        <div
                            class="absolute -left-1 top-full hidden group-hover:block bg-white shadow-lg rounded-lg w-40">
                            <ul class="">
                                <li>
                                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="block px-6 py-4 hover:bg-gray-100">
                                        {{ __('Sobre Mi') }}
                                    </x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-responsive-nav-link>
             <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" wire:navigate>
                {{ __('Servicios') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('product')" :active="request()->routeIs('product')" wire:navigate>
                {{ __('Productos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('podcast')" :active="request()->routeIs('podcast')" wire:navigate>
                {{ __('Podcast') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="https://notasweb.me" target="_blank" wire:navigate>
                {{ __('Blog') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                {{ __('Sobre Mi') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
