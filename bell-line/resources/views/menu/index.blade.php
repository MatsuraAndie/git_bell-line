<x-for_admin-layout>
  <x-slot name="title">ベルライン システムメニュー</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10">ベルライン　システムメニュー</header>
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
            <a href="/driver/report">
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
            <a href="/driver/schedule">
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
            <a href="/driver/attendance">
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

  <section class="max-w-5xl mx-auto mt-10 bg-white p-5">
    <h2 class="flex mb-5 text-blue-700 font-bold">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-warehouse-icon lucide-warehouse">
        <path d="M18 21V10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v11" />
        <path
          d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 1.132-1.803l7.95-3.974a2 2 0 0 1 1.837 0l7.948 3.974A2 2 0 0 1 22 8z" />
        <path d="M6 13h12" />
        <path d="M6 17h12" />
      </svg>
      &ensp;事務所メニュー
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
      <a href="/office/schedules"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-clipboard-clock-icon lucide-clipboard-clock mr-2 text-blue-700">
          <path d="M16 14v2.2l1.6 1" />
          <path d="M16 4h2a2 2 0 0 1 2 2v.832" />
          <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2" />
          <circle cx="16" cy="16" r="6" />
          <rect x="8" y="2" width="8" height="4" rx="1" />
        </svg>
        配車スケジュール管理
      </a>
      <a href="/office/payslips"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-banknote-icon lucide-banknote mr-2 text-orange-400">
          <rect width="20" height="12" x="2" y="6" rx="2" />
          <circle cx="12" cy="12" r="2" />
          <path d="M6 12h.01M18 12h.01" />
        </svg>
        給与明細出力</a>
      <a href="/office/employees"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-user-plus-icon lucide-user-plus mr-2">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <line x1="19" x2="19" y1="8" y2="14" />
          <line x1="22" x2="16" y1="11" y2="11" />
        </svg>
        社員登録</a>
      <a href="/office/reports"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-notebook-icon lucide-notebook mr-2 text-blue-700">
          <path d="M2 6h4" />
          <path d="M2 10h4" />
          <path d="M2 14h4" />
          <path d="M2 18h4" />
          <rect width="16" height="20" x="4" y="2" rx="2" />
          <path d="M16 2v20" />
        </svg>
        日報一覧確認</a>
      <a href="/office/invoices"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-printer-icon lucide-printer mr-2 text-orange-400">
          <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
          <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
          <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
        請求書出力</a>
      <a href="/office/vehicles"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-car-front-icon lucide-car-front mr-2">
          <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
          <path d="M7 14h.01" />
          <path d="M17 14h.01" />
          <rect width="18" height="8" x="3" y="10" rx="2" />
          <path d="M5 18v2" />
          <path d="M19 18v2" />
        </svg>
        車両登録</a>
      <a href="/office/attendances"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-calendar-plus-icon lucide-calendar-plus  mr-2 text-blue-700">
          <path d="M16 19h6" />
          <path d="M16 2v4" />
          <path d="M19 16v6" />
          <path d="M21 12.598V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8.5" />
          <path d="M3 10h18" />
          <path d="M8 2v4" />
        </svg>
        勤怠管理</a>
      <a href="/office/payroll"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-receipt-text-icon lucide-receipt-text mr-2 text-orange-400">
          <path d="M13 16H8" />
          <path d="M14 8H8" />
          <path d="M16 12H8" />
          <path
            d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z" />
        </svg>
        賃金台帳出力</a>
      <a href="/office/customers"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-book-plus-icon lucide-book-plus mr-2">
          <path d="M12 7v6" />
          <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
          <path d="M9 10h6" />
        </svg>
        顧客登録</a>
      <a href="/office/search"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-binoculars-icon lucide-binoculars mr-2 text-blue-700">
          <path d="M10 10h4" />
          <path d="M19 7V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3" />
          <path
            d="M20 21a2 2 0 0 0 2-2v-3.851c0-1.39-2-2.962-2-4.829V8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v11a2 2 0 0 0 2 2z" />
          <path d="M 22 16 L 2 16" />
          <path
            d="M4 21a2 2 0 0 1-2-2v-3.851c0-1.39 2-2.962 2-4.829V8a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v11a2 2 0 0 1-2 2z" />
          <path d="M9 7V4a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v3" />
        </svg>
        配車検索</a>
      <a href="/office/company"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-school-icon lucide-school  mr-2 text-orange-400">
          <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
          <path d="M18 5v16" />
          <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
          <path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
          <path d="M6 5v16" />
          <circle cx="12" cy="9" r="2" />
        </svg>
        会社情報</a>
      <a href="/office/routes"
        class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-map-plus-icon lucide-map-plus mr-2">
          <path
            d="m11 19-1.106-.552a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0l4.212 2.106a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619V12" />
          <path d="M15 5.764V12" />
          <path d="M18 15v6" />
          <path d="M21 18h-6" />
          <path d="M9 3.236v15" />
        </svg>
        ルート登録</a>
    </div>
  </section>
</x-for_admin-layout>
