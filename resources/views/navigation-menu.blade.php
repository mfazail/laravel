<nav x-data="{ open: false }" class="bg-white border-b fixed w-full z-20 border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img class="w-16" src="{{ asset('assets/logo.png') }}" alt="">
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a class="mx-3 font-medium" href="/">
                    Home
                </a>
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  bg-white hover:text-gray-700 focus:outline-none transition">
                                Packages

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Packages Offering
                        </div>

                        <x-jet-dropdown-link class="font-medium" href="{{ route('premium') }}">
                            Premium
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link class="font-medium" href="{{ route('economic') }}">
                            Economic
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link class="font-medium" href="{{ route('basic') }}">
                            Basic
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>
                <a class="mx-3 font-medium" href="#contact">
                    Contact Us
                </a>
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @auth
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">

                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>


                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
                                @if (Auth::user()->user_type == 'DEV')
                                    <x-jet-dropdown-link href="{{ route('allUser') }}">
                                        {{ __('Users') }}
                                    </x-jet-dropdown-link>
                                @endif


                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @else

                        <a class="mx-3 font-medium" href="{{ route('login') }}">Login</a>
                        <a class="mx-3 font-medium" href="{{ route('register') }}">Register</a>

                    @endauth
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500  focus:outline-none focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <a class="block mb-3 px-3" href="/">
                Home
            </a>
            <a class="block mb-3 px-3" href="{{ route('premium') }}">
                Premium
            </a>
            <a class="block mb-3 px-3" href="{{ route('economic') }}">
                Economic
            </a>
            <a class="block mb-3 px-3" href="{{ route('basic') }}">
                Basic
            </a>
            <a class="block mb-3 px-3" href="#contact">
                Contact Us
            </a>
            @auth
                <div class="flex items-center px-4">
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                        :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>
                    @if (Auth::user()->user_type == 'DEV')
                        <a class="block mb-3 px-3" href="{{ route('allUser') }}">
                            {{ __('Users') }}
                        </a>
                    @endif

                </div>
            @else
                <a class="block mx-3 my-5" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                <a class="block mx-3 my-5" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>

            @endauth
        </div>
    </div>
</nav>
