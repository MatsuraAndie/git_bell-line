@extends('layouts.app')
@section('title','システムメニュー')

@section('content')
  <section class="border rounded-xl bg-white p-6 mb-10">
    <h2 class="text-sm text-gray-500 mb-6">ドライバーメニュー</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <a href="/driver/report" class="block rounded-lg bg-gray-200 hover:bg-gray-300 p-8 text-center">日報入力</a>
      <a href="/driver/schedule" class="block rounded-lg bg-gray-200 hover:bg-gray-300 p-8 text-center">スケジュール</a>
      <a href="/driver/attendance" class="block rounded-lg bg-gray-200 hover:bg-gray-300 p-8 text-center">勤怠確認</a>
    </div>
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
