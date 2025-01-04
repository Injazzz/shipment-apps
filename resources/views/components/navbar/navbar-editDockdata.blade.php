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
                        <a href="{{route('dockingdata')}}" class="inline-flex items-center gap-2">
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
                            Docking Data
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-pen-line">
                                <path d="M12 20h9" />
                                <path
                                    d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
                            </svg>
                            Edit Data
                        </span>
                    </li>
                </ul>
            </div>
            <span class="font-bold text-lg text-white">Edit Data</span>
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
            alt="" class="w-full rounded-2xl h-10 min-h-32 ">
    </div>
</div>