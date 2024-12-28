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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="h-4 w-4 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Profile
                        </span>
                    </li>
                </ul>
            </div>
            <span class="font-bold text-lg text-white">Profile</span>
        </div>

        <div class="flex gap-3">
            <details class="dropdown dropdown-end">
                <summary class="btn btn-circle mr-3">
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
    <div class="absolute top-0 w-full">
        <img src="{{asset('curved0.jpg')}}" alt="" class="w-full rounded-2xl h-full min-h-32 ">
        <div
            class="absolute overflow-hidden flex justify-between -bottom-20 inset-x-5 lg:inset-x-10 bg-white/50 backdrop-blur-xl shadow-pils dark:shadow-pilsDark rounded-3xl p-5">
            <div class="flex gap-4 md:gap-5 lg:gap-7 w-full items-center">
                <div class="avatar">
                    <div class="ring-offset-base-100 w-16 lg:w-24 rounded-full ring ring-blue-500 ring-offset-1">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>

                <div class="flex flex-col gap-1 lg:gap-2 w-full text-black overflow-hidden">
                    <p class="text-lg lg:text-2xl xl:text-3xl w-36 md:w-56 lg:w-full truncate">Albert Alexa RBA Dot
                        Shell</p>
                    <hr>
                    <span class="text-sm lg:text-md xl:text-lg">Manager</span>
                </div>
            </div>
            <a href="{{route('profile.edit', ['id' => $user->id])}}" class="btn btn-sm md:btn-md btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-cog">
                    <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z" />
                    <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                    <path d="M12 2v2" />
                    <path d="M12 22v-2" />
                    <path d="m17 20.66-1-1.73" />
                    <path d="M11 10.27 7 3.34" />
                    <path d="m20.66 17-1.73-1" />
                    <path d="m3.34 7 1.73 1" />
                    <path d="M14 12h8" />
                    <path d="M2 12h2" />
                    <path d="m20.66 7-1.73 1" />
                    <path d="m3.34 17 1.73-1" />
                    <path d="m17 3.34-1 1.73" />
                    <path d="m11 13.73-4 6.93" />
                </svg>
                <span class="hidden lg:block">Edit Profile</span>
            </a>
        </div>
    </div>
</div>