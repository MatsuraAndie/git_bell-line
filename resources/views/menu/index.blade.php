@extends('layouts.app')
@section('title','システムメニュー')

@section('content')
  <section class="max-w-5xl mx-auto my-10">
    <h2 class="text-sm text-gray-500 mb-6">ドライバーメニュー</h2>
    <ul class="flex justify-between">
        <li class="bg-white w-2/12 p-5 text-center">
            @php
                use Carbon\Carbon;
                Carbon::setLocale('ja');
                $now = Carbon::now('Asia/Tokyo');
                $week = ['日', '月', '火', '水', '木', '金', '土'];
            @endphp

            <div class="text-gray-700 space-y-1 font-bold ">
            <p class="text-xl">{{ $now->format('m/d') }}<span class="text-sm">（{{ $week[$now->dayOfWeek] }}）</span></p>
            <p class="text-2xl">{{ $now->format('H:i') }}</p>
            </div>
        </li>
        <li class="bg-white w-3/12">
            <a href="/driver/report" class="block rounded-lg p-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line-icon lucide-pencil-line"><path d="M13 21h8"/><path d="m15 5 4 4"/><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/></svg>
日報入力</a>
        </li>
        <li class="bg-white w-3/12">
            <a href="/driver/schedule" class="block rounded-lg p-8 text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days-icon lucide-calendar-days"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
            スケジュール</a>
        </li>
        <li class="bg-white w-3/12">
             <a href="/driver/attendance" class="block rounded-lg p-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-timer-icon lucide-timer"><line x1="10" x2="14" y1="2" y2="2"/><line x1="12" x2="15" y1="14" y2="11"/><circle cx="12" cy="14" r="8"/></svg>
勤怠確認</a>
        </li>
    </ul>
  </section>



  <section class="border rounded-xl bg-white p-6">
    <h2 class="text-sm text-gray-500 mb-6">事務所メニュー</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <a href="/office/schedules"   class="btn">配車スケジュール管理</a>
      <a href="/office/payslips"    class="btn">給与明細出力</a>
      <a href="/office/employees"   class="btn">社員登録</a>
      <a href="/office/reports"     class="btn">日報一覧確認</a>
      <a href="/office/invoices"    class="btn">請求書出力</a>
      <a href="/office/vehicles"    class="btn">車両登録</a>
      <a href="/office/attendances" class="btn">出勤表入力・管理</a>
      <a href="/office/payroll"     class="btn">賃金台帳出力</a>
      <a href="/office/customers"   class="btn">顧客登録</a>
      <a href="/office/search"      class="btn">配車検索</a>
      <a href="/office/routes"      class="btn">ルート登録</a>
      <a href="/office/company"     class="btn">会社情報</a>
    </div>
  </section>

  <style>
    .btn{ @apply block rounded-lg bg-gray-200 hover:bg-gray-300 p-8 text-center; }
  </style>
@endsection
