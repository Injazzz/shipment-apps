<div class="w-full py-4 overflow-y-scroll scroll-smooth">
    <div class="w-full flex flex-wrap mt-5 px-3 justify-center items-center gap-5">
        <div class="flex gap-3 shadow-icon rounded-2xl p-5">
            <!-- Daily Report -->
            <div>
                <img src="{{asset('calendar(1).png')}}" alt="" class="w-32 h-32">
            </div>
            <ul class="mb-6 text-sm font-semibold">
                <li>Total Data : {{ $dailyReport['total_data'] }}</li>
                <li>Total T\Bongkar: {{ $dailyReport['total_t_bongkar'] }} ton</li>
                <li>Total T\Muat : {{ $dailyReport['total_t_muat'] }} ton</li>
                <li>Total Bongkar + Muat: {{ $dailyReport['total_t_bongkar_muat'] }} ton</li>

                <li class="flex justify-end mt-3">
                    <a href="#" class="btn btn-xs">see details
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex gap-3 shadow-icon rounded-2xl p-5">
            <!-- Monthly Report -->
            <div>
                <img src="{{asset('calendar.png')}}" alt="" class="w-32 h-32">
            </div>
            <ul class="mb-6 text-sm font-semibold">
                <li>Total Data: {{ $monthlyReport['total_data'] }}</li>
                <li>Total T Bongkar: {{ $monthlyReport['total_t_bongkar'] }} ton</li>
                <li>Total T Muat: {{ $monthlyReport['total_t_muat'] }} ton</li>
                <li>Total Bongkar + Muat: {{ $monthlyReport['total_t_bongkar_muat'] }} ton</li>

                <li class="flex justify-end mt-3">
                    <a href="#" class="btn btn-xs">see details
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex gap-3 shadow-icon rounded-2xl p-5">
            <!-- Yearly Report -->
            <div>
                <img src="{{asset('archive.png')}}" alt="" class="w-32 h-32">
            </div>
            <ul class="mb-6 text-sm font-semibold">
                <li>Total Data: {{ $yearlyReport['total_data'] }}</li>
                <li>Total T Bongkar: {{ $yearlyReport['total_t_bongkar'] }} ton</li>
                <li>Total T Muat: {{ $yearlyReport['total_t_muat'] }} ton</li>
                <li>Total Bongkar + Muat: {{ $yearlyReport['total_t_bongkar_muat'] }} ton</li>

                <li class="flex justify-end mt-3">
                    <a href="#" class="btn btn-xs">see details
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>





</div>
