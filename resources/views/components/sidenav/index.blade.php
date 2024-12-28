<aside class="h-full text-black">
    <div class="flex flex-col justify-between h-full">
        <div class="mt-5">
            <div class="flex flex-col justify-center items-center">
                <img src="{{asset('logo-app.png')}}" alt="logo">
                <span class="hidden md:block">IKKP Merak</span>
            </div>
            <ul class="space-y-3 mt-5 flex flex-col items-center md:space-y-1 md:px-5 md:items-start ">
                <li
                    class="{{ Request::is('dashboard*') ? 'flex justify-between items-center md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in flex justify-between items-center' }}">
                    <a href="/dashboard/{id}" class="flex items-center gap-2">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('dashboard*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 border-0' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-gauge w-5 h-5">
                                    <path d="m12 14 4-4" />
                                    <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('dashboard*') ? 'text-black' : 'text-black dark:text-white' }}">Dashboard</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('analytics*') ? 'md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in' }}">
                    <a href="/analytics" class="flex items-center gap-2">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('analytics*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chart-spline">
                                    <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                                    <path d="M7 16c.5-2 1.5-7 4-7 2 0 2 3 4 3 2.5 0 4.5-5 5-7" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('analytics*') ? 'text-black' : 'text-black dark:text-white' }}">Analytics</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('dockingdata*') ? 'md:truncate md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in md:truncate' }}">
                    <a href="/dockingdata" class="flex items-center gap-2 text-sm xl:text-md">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('dockingdata*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10  block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-ship">
                                    <path d="M12 10.189V14" />
                                    <path d="M12 2v3" />
                                    <path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6" />
                                    <path
                                        d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76" />
                                    <path
                                        d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('dockingdata*') ? 'text-black' : 'text-black dark:text-white' }}">Docking
                            Data</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('newdata*') ? 'md:truncate md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in md:truncate' }}">
                    <a href="/newdata" class="flex items-center gap-2 text-sm xl:text-md">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('newdata*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-badge-plus">
                                    <path
                                        d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('newdata*') ? 'text-black' : 'text-black dark:text-white' }}">New
                            Data</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('profile*') ? 'md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in' }}">
                    <a href="/profile" class="flex items-center gap-2 text-sm xl:text-md text-black">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('profile*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-user-round">
                                    <circle cx="12" cy="8" r="5" />
                                    <path d="M20 21a8 8 0 0 0-16 0" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('profile*') ? 'text-black' : 'text-black dark:text-white' }}">Profile</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('report*') ? 'md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in' }}">
                    <a href="/report" class="flex items-center gap-2 text-sm xl:text-md">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('report*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-library-big">
                                    <rect width="8" height="18" x="3" y="3" rx="1" />
                                    <path d="M7 3v18" />
                                    <path
                                        d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('report*') ? 'text-black' : 'text-black dark:text-white' }}">Report</span>
                    </a>
                </li>

                <li
                    class="{{ Request::is('archive*') ? 'md:p-2 w-fit md:w-full bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group w-fit md:w-full md:p-2 rounded-xl transition duration-200 ease-out hover:ease-in' }}">
                    <a href="/archive" class="flex items-center gap-2 text-sm xl:text-md">
                        <div
                            class="relative p-2.5 bg-white/50 backdrop-blur-xl shadow-iconSm group-hover:shadow-icon dark:group-hover:shadow-iconDark rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('archive*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-white/75 backdrop-blur-xl  transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10 block md:hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-container">
                                    <path
                                        d="M22 7.7c0-.6-.4-1.2-.8-1.5l-6.3-3.9a1.72 1.72 0 0 0-1.7 0l-10.3 6c-.5.2-.9.8-.9 1.4v6.6c0 .5.4 1.2.8 1.5l6.3 3.9a1.72 1.72 0 0 0 1.7 0l10.3-6c.5-.3.9-1 .9-1.5Z" />
                                    <path d="M10 21.9V14L2.1 9.1" />
                                    <path d="m10 14 11.9-6.9" />
                                    <path d="M14 19.8v-8.1" />
                                    <path d="M18 17.5V9.4" />
                                </svg>
                            </div>
                        </div>
                        <span
                            class="hidden text-sm xl:text-md md:block {{ Request::is('archive*') ? 'text-black' : 'text-black dark:text-white' }}">Arsip</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="p-3">
            {{-- <div
                class="w-full h-52 rounded-xl shadow-pils bg-black bg-gradient-to-bl from-yellow-500 to-white dark:bg-gradient-to-bl dark:from-blue-500 overflow-hidden">
                <div class="relative flex flex-col w-full h-full">
                    <img id="themeImage" src="{{asset('moon.png')}}" alt="night" class="mt-10 mr-10">
                    <div class="absolute top-0 w-full h-full flex items-center justify-center">
                        <div class="w-44 h-32 bg-white/35 backdrop-blur-sm rounded-3xl shadow-pils p-5">
                            <h1 class="text-black">Click me to switch mode</h1>
                            <div class="flex justify-center mt-5">
                                <label for="theme-switch" class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="theme-switch" class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="w-full h-14 mt-5 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 rounded-xl">
                <!-- Open the modal using ID.showModal() method -->
                <button class="flex gap-2 items-center btn btn-ghost w-full h-14" onclick="modal_logout.showModal()">
                    <div class="block md:hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-door-closed ">
                            <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14" />
                            <path d="M2 20h20" />
                            <path d="M14 12v.01" />
                        </svg>
                    </div>
                    <span class="hidden text-sm xl:text-md md:block">Logout</span>
                </button>

                <dialog id="modal_logout" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold">Are you sure to Logout??</h3>
                        <p class="py-4">Or press
                            <kbd class="kbd kbd-sm">ESC</kbd>
                            key to cancel this procces.
                        </p>
                        <div class="modal-action flex justify-end items-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex gap-2 items-center btn btn-ghost w-full h-14">
                                    <div class="block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-door-closed ">
                                            <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14" />
                                            <path d="M2 20h20" />
                                            <path d="M14 12v.01" />
                                        </svg>
                                    </div>
                                    <span class="block text-sm xl:text-md">Logout</span>
                                </button>
                            </form>

                            <form method="dialog">
                                <button class="btn btn-error h-14">Cancel</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </div>
</aside>