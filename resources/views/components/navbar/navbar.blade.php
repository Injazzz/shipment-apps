<nav class="bg-transparent p-3 backdrop-blur-sm">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" id="menu-toggle"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>

                    <!-- Icon when menu is closed.Menu open: "hidden", Menu closed: "block" -->
                    <svg id="menu-closed-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <!--Icon when menu is open.Menu open: "block", Menu closed: "hidden"-->
                    <svg id="menu-opened-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-brain-circuit text-info">
                        <path
                            d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                        <path d="M9 13a4.5 4.5 0 0 0 3-4" />
                        <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5" />
                        <path d="M3.477 10.896a4 4 0 0 1 .585-.396" />
                        <path d="M6 18a4 4 0 0 1-1.967-.516" />
                        <path d="M12 13h4" />
                        <path d="M12 18h6a2 2 0 0 1 2 2v1" />
                        <path d="M12 8h8" />
                        <path d="M16 8V5a2 2 0 0 1 2-2" />
                        <circle cx="16" cy="13" r=".5" />
                        <circle cx="18" cy="3" r=".5" />
                        <circle cx="20" cy="21" r=".5" />
                        <circle cx="20" cy="8" r=".5" />
                    </svg>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">

                        <x-navbar.nav-link href="/" aria-current="page">Home
                        </x-navbar.nav-link>
                        <x-navbar.nav-link href="/about">About</x-navbar.nav-link>
                        <x-navbar.nav-link href="/contact">Contact
                        </x-navbar.nav-link>
                        <x-navbar.nav-link href="/feedback">Feedback
                        </x-navbar.nav-link>
                    </div>
                </div>
            </div>
            <div>
                <a href="/login">
                    <button class="btn md:w-32 text-sm md:text-lg">Sign In</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <x-navbar.dropdown-link href="/" aria-current="page">Home</x-navbar.dropdown-link>
            <x-navbar.dropdown-link href="/about">About</x-navbar.dropdown-link>
            <x-navbar.dropdown-link href="/contact">Contact</x-navbar.dropdown-link>
            <x-navbar.dropdown-link href="/feedback">Feedback</x-navbar.dropdown-link>
        </div>
    </div>
</nav>