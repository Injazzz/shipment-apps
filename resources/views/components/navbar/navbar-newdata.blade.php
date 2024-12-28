<nav
    class="w-full p-3 flex justify-between items-center shadow-iconSm dark:border-0 dark:shadow-pilsDark rounded-2xl mt-5">
    <div class="flex flex-col">
        <div class="breadcrumbs max-w-xs text-sm">
            <ul>
                <li>
                    <a href="/dashboard/{id}" class="inline-flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-gauge w-5 h-5">
                            <path d="m12 14 4-4" />
                            <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <span class="inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="h-4 w-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        New Data
                    </span>
                </li>
            </ul>
        </div>
        <span class="font-bold text-lg">New Data</span>
    </div>

    <div class="flex gap-3">
        <details class="dropdown dropdown-end">
            <summary class="btn btn-circle mr-3 mb-5">
                <div class="avatar">
                    <div class="w-16 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </summary>
            <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow-xl space-y-1">
                <li><a href="/profile" class="flex items-center gap-2">
                        <div class="block md:hidden lg:block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user-round">
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 0 0-16 0" />
                            </svg>
                        </div>
                        Profile Setting
                    </a>
                </li>
                <li><a class="flex gap-2 items-center" onclick="modal_logout.showModal()">
                        <div class="block md:hidden lg:block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-door-closed text-red-500">
                                <path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14" />
                                <path d="M2 20h20" />
                                <path d="M14 12v.01" />
                            </svg>
                        </div>
                        <span class="text-sm xl:text-md">Logout</span>
                    </a>
                </li>
            </ul>
        </details>
    </div>
</nav>