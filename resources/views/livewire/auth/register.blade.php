<div class="absolute top-0 bottom-0 h-screen w-full bg-black/35 backdrop-blur-sm">
    <div class="w-full h-full flex justify-center items-center">
        <div class="w-[500px] h-[800px] bg-white dark:bg-zinc-300 rounded-2xl shadow-xl overflow-y-scroll">
            <div class="flex justify-end items-center">
                <a href="/" class="btn btn-ghost text-blue-500 mt-2 mr-2">back<svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-right text-blue-500">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <form class="flex flex-col px-5" wire:submit.prevent="registerUser">
                <div class="">
                    <p class="pl-5 font-bold text-[3rem] text-black">Sign Up</p>
                </div>
                <div class="px-14 pt-5">
                    <label class="input input-bordered input-md rounded-xl flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-6 w-6 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input id="name" type="text" class="grow @error('name')
                            invalid:border-red-300
                        @enderror" placeholder="username" wire:model.defer="name" />
                    </label>

                    @error('name')
                    <div class="text-red-500 text-sm ml-2 pb-1">{{$message}}</div>
                    @enderror

                    <label class="mt-3 input input-bordered input-md rounded-xl flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="h-6 w-6 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input id="email" type="email" class="grow @error('email')
                            invalid:border-red-300
                        @enderror" placeholder="email" wire:model.defer="email" />
                    </label>

                    @error('email')
                    <div class="text-red-500 text-sm ml-2 pb-2">{{$message}}</div>
                    @enderror

                    <label class="mt-3 input input-bordered input-md rounded-xl flex items-center gap-2">
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
                    <div class="text-red-500 text-sm ml-2 pb-2">{{$message}}</div>
                    @enderror

                    <label class="mt-3 input input-bordered input-md rounded-xl flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shield-half">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="M12 22V2" />
                        </svg>
                        <input id="confirm_password" type="password" class="grow @error('confirm_password')
                            invalid:border-red-300
                        @enderror" placeholder="confirm password" wire:model.defer="confirm_password" />
                    </label>

                    @error('confirm_password')
                    <div class="text-red-500 text-sm ml-2 pb-2">{{$message}}</div>
                    @enderror

                    <div class="mt-5 flex gap-3">
                        <input type="checkbox" wire:model="agreement" class="checkbox border-orange-400 [--chkbg:theme(colors.indigo.600)] [--chkfg:orange] checked:border-indigo-800 @error('agreement')
                            invalid:border-red-300
                        @enderror" />
                        <p class="text-black text-sm">By creating account, you Agree to our <span
                                class="text-blue-500">Terms of
                                Service and Condition</span> and <span class="text-blue-500">Privacy Policy</span></p>
                    </div>
                    @error('agreement')
                    <div class="text-red-500 text-sm ml-2 pb-2">{{$message}}</div>
                    @enderror
                </div>

                <div class="flex w-full flex-col border-opacity-50 px-8 mt-7">
                    <button type="submit"
                        class="btn btn-primary btn-lg card rounded-full grid place-items-center">Create
                        Account</button>
                    <div class="divider">OR</div>
                    <button class="btn btn-disabled bg-base-300 rounded-box h-16 flex items-center justify-center">
                        <img src="/google_logo.svg" alt="google" class="w-12 h-12">
                        <p>Continue with Google</p>
                    </button>
                </div>

                <a href="{{ route('login')}}" class="text-blue-500 mt-7 ml-10 mb-5">Sudah punya akun?</a>
            </form>
        </div>
    </div>

</div>