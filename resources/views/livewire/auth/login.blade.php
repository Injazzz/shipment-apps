<div class="absolute top-0 h-screen w-full bg-black/35 backdrop-blur-sm">
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-[500px] h-fit bg-white dark:bg-zinc-300 rounded-2xl shadow-xl">
            <div class="flex justify-end items-center">
                <a href="/" class="btn btn-ghost text-blue-500 m-2">back<svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-right text-blue-500">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <form class="flex flex-col px-5" wire:submit.prevent="loginUser">
                <div class="">
                    <p class="pl-5 font-bold text-[3rem] text-black">Sign In</p>
                </div>
                <div class="px-14 py-5">
                    <label class="input input-bordered input-lg rounded-xl flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-6 w-6 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input id="email" type="email" class="grow @error('email')
                            invalid:border-red-300
                        @enderror" placeholder="Email" wire:model.defer="email" />
                    </label>

                    @error('email')
                    <div class="text-red-500 text-md pb-2">{{$message}}</div>
                    @enderror

                    <label class="input input-bordered input-lg rounded-xl flex items-center gap-2 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-6 w-6 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input id="password" type="password" class="grow @error('password')
                            invalid:border-red-300
                        @enderror" placeholder="password" wire:model.defer="password" />
                    </label>

                    @error('password')
                    <div class="text-red-500 text-md pb-2">{{$message}}</div>
                    @enderror

                    <div class="flex gap-3 mt-7">
                        <input id="remember_me" type="checkbox"
                            class="checkbox border-orange-400 [--chkbg:theme(colors.indigo.600)] [--chkfg:orange] checked:border-indigo-800"
                            wire:model.defer="remember_me" />
                        <p class="text-black">Remember me.</p>
                    </div>
                </div>

                <div class="flex w-full flex-col border-opacity-50 px-8 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg card rounded-full grid place-items-center">Sign
                        In</button>
                    <div class="divider">OR</div>
                    <button class="btn btn-disabled bg-base-300 rounded-box h-16 flex items-center justify-center">
                        <img src="/google_logo.svg" alt="google" class="w-12 h-12">
                        <p>Continue with Google</p>
                    </button>
                </div>

                <a href="{{ route('register')}}" class="text-blue-500 mt-7 ml-10 pb-5">Belum punya akun?</a>
            </form>
        </div>
    </div>

</div>