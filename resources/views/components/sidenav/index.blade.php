<aside class="h-full text-black dark:text-white">
    <div class="flex flex-col justify-between h-full">
        <div class="mt-5">
            <div class="flex flex-col justify-center items-center">
                <img src="{{asset('logo-app.png')}}" alt="logo">
                <span class="">Shipment App</span>
            </div>
            <ul class="space-y-1 ml-7 mt-5 mr-5">
                <li
                    class="{{ Request::is('dashboard*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/dashboard/{id}" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('dashboard*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 border-0' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-gauge">
                                    <path d="m12 14 4-4" />
                                    <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                                </svg>
                            </div>
                        </div>
                        Dashboard
                    </a>
                </li>
                <li
                    class="{{ Request::is('analytics*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/analytics" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('analytics*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chart-spline">
                                    <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                                    <path d="M7 16c.5-2 1.5-7 4-7 2 0 2 3 4 3 2.5 0 4.5-5 5-7" />
                                </svg>
                            </div>
                        </div>
                        Analytics
                    </a>
                </li>

                <li
                    class="{{ Request::is('dockingdata*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/dockingdata" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('dockingdata*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
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
                        Docking Data
                    </a>
                </li>

                <li
                    class="{{ Request::is('team*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/team" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('team*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users-round">
                                    <path d="M18 21a8 8 0 0 0-16 0" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                                </svg>
                            </div>
                        </div>
                        Team
                    </a>
                </li>

                <li
                    class="{{ Request::is('profile*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/profile" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('profile*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-user-round">
                                    <circle cx="12" cy="8" r="5" />
                                    <path d="M20 21a8 8 0 0 0-16 0" />
                                </svg>
                            </div>
                        </div>
                        Profile
                    </a>
                </li>

                <li
                    class="{{ Request::is('report*') ? 'p-2 text-black bg-white dark:bg-zinc-300 dark:border-black shadow-pils dark:shadow-pilsDark border rounded-xl' : 'group p-2 rounded-xl transition duration-200 ease-out hover:ease-in hover:bg-white hover:shadow-pils hover:border hover:text-black' }}">
                    <a href="/report" class="flex items-center gap-3">
                        <div class="relative p-2.5 shadow-icon rounded-xl overflow-hidden border-0">
                            <!-- Static Background -->
                            <div
                                class="{{ Request::is('report*') ? 'opacity-100 absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300' : 'absolute inset-0 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 transition-opacity duration-300 opacity-0 group-hover:opacity-100' }}">
                            </div>
                            <!-- Content -->
                            <div class="relative z-10">
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
                        Report
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex gap-3 items-center btn btn-ghost w-full h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-door-closed">
                            <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14" />
                            <path d="M2 20h20" />
                            <path d="M14 12v.01" />
                        </svg>
                        <p class="text-xl">Logout</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>