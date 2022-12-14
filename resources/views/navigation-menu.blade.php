<nav x-data="{ open: false }" class="NvarPrin border-b border-gray-100">

    <link rel="stylesheet" href="/css/estilos_barra.css">
    <script src="{{ asset('/js/Dom-nav.js') }}" defer></script>

    <!-- Primary Navigation Menu -->
    <div>
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a class="aStyle" href="{{ route('dashboard') }}">
                        <img class="Logovar" src="/img/Logo_max.png" alt="Imagen Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link id="Item1" onclick="AjusActItem1()" href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')" class="Itemsvar Activenav">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link id="Item2" onclick="AjusActItem2()" href="{{ route('Actividades') }}"
                        :active="request()->routeIs('Actividades')" class="Itemsvar NotActive">
                        {{ __('Actividades') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link id="Item3" onclick="AjusActItem3()" href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')" class="Itemsvar NotActive">
                        {{ __('Registros') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link id="Item4" onclick="AjusActItem4()" href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')" class="Itemsvar NotActive">
                        {{ __('Historial') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link id="Item5" onclick="AjusActItem5()" href="{{ route('servicios') }}"
                        :active="request()->routeIs('servicios')" class="Itemsvar NotActive">
                        {{ __('Servicios') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">


                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48" style="z-index: 100;">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Gestionar Cuenta') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Cerrar Sesion') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden" style="margin-right: 0px;">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 pl-3">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="Itemsvar">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1 pl-3">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="Itemsvar NotActive"
                class="Itemsvar NotActive">
                {{ __('Actividades') }}
            </x-jet-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1 pl-3">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="Itemsvar NotActive">
                {{ __('Registros') }}
            </x-jet-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1 pl-3">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="Itemsvar NotActive">
                {{ __('Historial') }}
            </x-jet-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1 pl-3">
            <x-jet-nav-link href="{{ route('servicios') }}" :active="request()->routeIs('servicios')" class="Itemsvar NotActive">
                {{ __('Servicios') }}
            </x-jet-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Gestionar Cuenta') }}
            </div>


            <div class="mt-3 space-y-1">
                <!-- Account Management -->



                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Perfil') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Cerrar Sesion') }}
                    </x-jet-responsive-nav-link>
                </form>


            </div>
        </div>
    </div>
</nav>
