<x-for_admin-layout>
  <x-slot name="title">ベルライン システムメニュー</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex justify-between items-center">
    <p>ベルライン システムメニュー</p>
    <div class="flex items-end justify-end">
      @include('common.header-part')
    </div>
  </header>



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

    <div class="grid grid-cols-3 gap-6 px-10">
      <ul class="space-y-3">
        <li>
          <a href="{{ route('office.schedules') }}"
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
        </li>
        <li>
          <a href="{{ route('office.reports') }}"
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
        </li>
        <li>
          <a href="{{ route('attendances.index') }}"
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
        </li>
        <li>
          <a href="{{ route('office.search') }}"
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
        </li>
      </ul>

      <ul class="space-y-3">
        <li>
          <a href="{{ route('office.payslips') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-banknote-icon lucide-banknote mr-2 text-orange-400">
              <rect width="20" height="12" x="2" y="6" rx="2" />
              <circle cx="12" cy="12" r="2" />
              <path d="M6 12h.01M18 12h.01" />
            </svg>
            給与明細出力</a>
        </li>
        <li>
          <a href="{{ route('office.invoices') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-printer-icon lucide-printer mr-2 text-orange-400">
              <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
              <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
              <rect x="6" y="14" width="12" height="8" rx="1" />
            </svg>
            請求書出力</a>
        </li>
        <li>
          <a href="{{ route('office.bonus') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-banknote-icon lucide-banknote mr-2 text-orange-400">
              <rect width="20" height="12" x="2" y="6" rx="2" />
              <circle cx="12" cy="12" r="2" />
              <path d="M6 12h.01M18 12h.01" />
            </svg>
            賞与明細出力</a>
        </li>
        <li>
          <a href="{{ route('office.payroll') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-receipt-text-icon lucide-receipt-text mr-2 text-orange-400">
              <path d="M13 16H8" />
              <path d="M14 8H8" />
              <path d="M16 12H8" />
              <path
                d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z" />
            </svg>
            賃金台帳出力</a>
        </li>
      </ul>

      <ul class="space-y-3">
        <li>
          <a href="{{ route('office.employees') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus mr-2">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <line x1="19" x2="19" y1="8" y2="14" />
              <line x1="22" x2="16" y1="11" y2="11" />
            </svg>
            社員登録</a>
        </li>
        <li>
          <a href="{{ route('office.vehicles') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-car-front-icon lucide-car-front mr-2">
              <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
              <path d="M7 14h.01" />
              <path d="M17 14h.01" />
              <rect width="18" height="8" x="3" y="10" rx="2" />
              <path d="M5 18v2" />
              <path d="M19 18v2" />
            </svg>
            車両登録</a>
        </li>
        <li>
          <a href="{{ route('office.customers') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-users-icon lucide-users  mr-2">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <path d="M16 3.128a4 4 0 0 1 0 7.744" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <circle cx="9" cy="7" r="4" />
            </svg>
            顧客登録</a>
        </li>
        <li>
          <a href="{{ route('office.routes') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-map-plus-icon lucide-map-plus mr-2">
              <path
                d="m11 19-1.106-.552a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0l4.212 2.106a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619V12" />
              <path d="M15 5.764V12" />
              <path d="M18 15v6" />
              <path d="M21 18h-6" />
              <path d="M9 3.236v15" />
            </svg>
            ルート登録</a>
        </li>
        <li>
          <a href="{{ route('office.user') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-user-star-icon lucide-user-star mr-2">
              <path
                d="M16.051 12.616a1 1 0 0 1 1.909.024l.737 1.452a1 1 0 0 0 .737.535l1.634.256a1 1 0 0 1 .588 1.806l-1.172 1.168a1 1 0 0 0-.282.866l.259 1.613a1 1 0 0 1-1.541 1.134l-1.465-.75a1 1 0 0 0-.912 0l-1.465.75a1 1 0 0 1-1.539-1.133l.258-1.613a1 1 0 0 0-.282-.866l-1.156-1.153a1 1 0 0 1 .572-1.822l1.633-.256a1 1 0 0 0 .737-.535z" />
              <path d="M8 15H7a4 4 0 0 0-4 4v2" />
              <circle cx="10" cy="7" r="4" />
            </svg>
            ユーザー管理</a>
        </li>
        <li>
          <a href="{{ route('company.edit') }}"
            class="bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer p-5 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-school-icon lucide-school  mr-2">
              <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
              <path d="M18 5v16" />
              <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
              <path
                d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
              <path d="M6 5v16" />
              <circle cx="12" cy="9" r="2" />
            </svg>
            会社情報</a>
        </li>
    </div>
  </section>
</x-for_admin-layout>
