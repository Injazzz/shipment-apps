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
                    <svg class="h-8 w-auto" viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#6366f1"
                            d="M23.5 6.5C17.5 6.5 13.75 9.5 12.25 15.5C14.5 12.5 17.125 11.375 20.125 12.125C21.8367 12.5529 23.0601 13.7947 24.4142 15.1692C26.6202 17.4084 29.1734 20 34.75 20C40.75 20 44.5 17 46 11C43.75 14 41.125 15.125 38.125 14.375C36.4133 13.9471 35.1899 12.7053 33.8357 11.3308C31.6297 9.09158 29.0766 6.5 23.5 6.5ZM12.25 20C6.25 20 2.5 23 1 29C3.25 26 5.875 24.875 8.875 25.625C10.5867 26.0529 11.8101 27.2947 13.1642 28.6693C15.3702 30.9084 17.9234 33.5 23.5 33.5C29.5 33.5 33.25 30.5 34.75 24.5C32.5 27.5 29.875 28.625 26.875 27.875C25.1633 27.4471 23.9399 26.2053 22.5858 24.8307C20.3798 22.5916 17.8266 20 12.25 20Z" />
                        <defs>
                            <linearGradient id="%%GRADIENT_ID%%" x1="33.999" x2="1" y1="16.181" y2="16.181"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="%%GRADIENT_TO%%" />
                                <stop offset="1" stop-color="%%GRADIENT_FROM%%" />
                            </linearGradient>
                        </defs>
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