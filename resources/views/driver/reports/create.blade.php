@extends('layouts.app')
@section('title','日報入力')
@section('content')
  <h1 class="text-2xl font-bold mb-6">日報入力</h1>

  <form class="space-y-6 max-w-3xl">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <label class="block">
        <span class="text-sm text-gray-600">日付</span>
        <input type="date" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">ドライバー</span>
        <input type="text" class="mt-1 w-full rounded border-gray-300" placeholder="山田 太郎" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">車両</span>
        <input type="text" class="mt-1 w-full rounded border-gray-300" placeholder="相模130あ1188" />
      </label>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <label class="block">
        <span class="text-sm text-gray-600">出勤</span>
        <input type="time" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">退勤</span>
        <input type="time" class="mt-1 w-full rounded border-gray-300" />
      </label>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <label class="block">
        <span class="text-sm text-gray-600">荷主</span>
        <input type="text" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">積み地</span>
        <input type="text" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">卸し地</span>
        <input type="text" class="mt-1 w-full rounded border-gray-300" />
      </label>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <label class="block">
        <span class="text-sm text-gray-600">走行距離 (km)</span>
        <input type="number" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">運賃（円）</span>
        <input type="number" class="mt-1 w-full rounded border-gray-300" />
      </label>
      <label class="block">
        <span class="text-sm text-gray-600">ボーナス（円）</span>
        <input type="number" class="mt-1 w-full rounded border-gray-300" />
      </label>
    </div>

    <label class="block">
      <span class="text-sm text-gray-600">備考</span>
      <textarea class="mt-1 w-full rounded border-gray-300" rows="4" placeholder="破損・事故・異常など"></textarea>
    </label>

    <div class="flex gap-3">
      <button type="button" class="px-5 py-2 rounded bg-blue-600 text-white">保存（ダミー）</button>
      <a href="/" class="px-5 py-2 rounded bg-gray-200">メニューへ戻る</a>
    </div>
  </form>
@endsection
