<x-for_admin-layout>
  <x-slot name="title">ベルライン システムメニュー</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex justify-between items-center">
    <p>ベルライン システムメニュー</p>
    <div class="flex items-end justify-end">
      @include('common.header_part')
    </div>
  </header>

  <section class="max-w-5xl mx-auto">
    <div class="flex justify-between bg-white p-10 mt-5">
      <div class="w-3/12 bg-blue-500 text-white rounded-2xl text-center font-bold flex justify-center items-center">
        @php
          $now = \Carbon\Carbon::now();
          $weekdays = ['日', '月', '火', '水', '木', '金', '土'];
        @endphp
        <ul>
          <li class="text-3xl mt-2">{{ $now->format('m/d') }}</li>
          <li>{{ $weekdays[$now->dayOfWeek] }}曜日</li>
          <li class="text-6xl mt-5"> {{ $now->format('H:i') }}</li>
        </ul>
      </div>
      <div class="w-8/12">
        <h2 class="flex mb-5 text-blue-700 font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car-icon lucide-car">
            <path
              d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
            <circle cx="7" cy="17" r="2" />
            <path d="M9 17h6" />
            <circle cx="17" cy="17" r="2" />
          </svg>
          &ensp;ドライバーメニュー</h2>
        <ul class="flex justify-between">
          <li class="w-2/6 mx-2">
            <a href="{{ route('driver.report') }}">
              <div class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                <div class="h-30 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-notebook-pen-icon lucide-notebook-pen">
                    <path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4" />
                    <path d="M2 6h4" />
                    <path d="M2 10h4" />
                    <path d="M2 14h4" />
                    <path d="M2 18h4" />
                    <path
                      d="M21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                  </svg>
                </div>
                <div class="p-4">
                  <div class="flex items-center justify-between">
                    <h1 class="text-gray-600 font-medium">日報</h1>
                  </div>
                  <p class="text-gray-400 text-xs my-1">日報記入</p>
                </div>
              </div>
            </a>
          </li>
          <li class="w-2/6 mx-2">
            <a href="{{ route('driver.schedule') }}">
              <div class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                <div class="h-30 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-timer-reset-icon lucide-timer-reset">
                    <path d="M10 2h4" />
                    <path d="M12 14v-4" />
                    <path d="M4 13a8 8 0 0 1 8-7 8 8 0 1 1-5.3 14L4 17.6" />
                    <path d="M9 17H4v5" />
                  </svg>
                </div>
                <div class="p-4">
                  <div class="flex items-center justify-between">
                    <h1 class="text-gray-600 font-medium">スケジュール</h1>
                  </div>
                  <p class="text-gray-400 text-xs my-1">一日の配送スケジュール</p>
                </div>
              </div>
            </a>
          </li>
          <li class="w-2/6 mx-2">
            <a href="{{ route('driver.attendance') }}">
              <div class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                <div class="h-30 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-calendar-days-icon lucide-calendar-days">
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" />
                    <path d="M3 10h18" />
                    <path d="M8 14h.01" />
                    <path d="M12 14h.01" />
                    <path d="M16 14h.01" />
                    <path d="M8 18h.01" />
                    <path d="M12 18h.01" />
                    <path d="M16 18h.01" />
                  </svg>
                </div>
                <div class="p-4">
                  <div class="flex items-center justify-between">
                    <h1 class="text-gray-600 font-medium">勤怠一覧</h1>
                  </div>
                  <p class="text-gray-400 text-xs my-1">月間の勤怠表</p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
  </section>

</x-for_admin-layout>
