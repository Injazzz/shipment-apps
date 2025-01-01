<div class="relative flex">
    <nav class="w-full p-3 flex justify-between items-center z-50">
        <div class="flex flex-col">
            <div class="breadcrumbs max-w-xs text-sm">
                <ul class="text-white">
                    <li>
                        <a href="/dashboard/{id}" class="inline-flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-gauge w-5 h-5">
                                <path d="m12 14 4-4" />
                                <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-badge-plus">
                                <path
                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                <line x1="12" x2="12" y1="8" y2="16" />
                                <line x1="8" x2="16" y1="12" y2="12" />
                            </svg>
                            New Data
                        </span>
                    </li>
                </ul>
            </div>
            <span class="font-bold text-lg text-white">New Data</span>
        </div>

        <div class="flex gap-3">
            <details class="dropdown dropdown-end">
                <summary class="btn btn-circle mr-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" />
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
    <div class="absolute top-0 w-full z-10">
        <img src="{{asset('простая справочная информация, синий, градиент, плакат фон картинки и Фото для бесплатной загрузки.jpeg')}}"
            alt="nav" class="w-full rounded-2xl h-10 min-h-32 ">
    </div>
</div>