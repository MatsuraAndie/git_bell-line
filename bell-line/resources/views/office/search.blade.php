<x-for_admin-layout>
  <x-slot name="title">配車検索 │ ベルライン</x-slot>

  @include('common.header-office', ['title' => '配車検索'])

  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-3 gap-6">
      <li>
        <div class="relative z-0 flex w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 border shadow-sm w-1/6">
            日付</div>
          <input type="date" id="data" value="<?php echo date('Y-m-d'); ?>"
            class="w-2/6 text-xs p-2 rounded-md border-gray-300 py-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          <p class="text-center p-2">～</p>
          <input type="date" id="data" value="<?php echo date('Y-m-d'); ?>"
            class="w-2/6 text-xs p-2 rounded-md border-gray-300 py-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex  w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-3 border shadow-sm w-2/5">
            ドライバー名</div>
          <select name="driver"
            class="p-2 rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 w-3/5"></select>
        </div>
      </li>
      <li>
        <div class="relative z-0 flex  w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-3 border shadow-sm w-2/5">
            車番</div>
          <select name="driver"
            class="p-2 rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 w-3/5"></select>
        </div>
      </li>
      <li>
        <div class="relative z-0 flex  w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-3 border shadow-sm w-2/5">
            荷主</div>
          <select name="Shipper"
            class="p-2 rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 w-3/5"></select>
        </div>
      </li>
      <li>
        <div class="relative z-0 flex  w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-3 border shadow-sm w-2/5">
            積み</div>
          <input name="tsumi" type="text"
            class="p-2 rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 w-3/5">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex  w-full">
          <div
            class="flex items-center p-2 rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-3 border shadow-sm w-2/5">
            卸し</div>
          <input name="tsumi" type="text"
            class="p-2 rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 w-3/5">
        </div>
      </li>
    </ul>
    <div class="mt-5 flex justify-end">
      <button class="p-2 rounded bg-blue-500 hover:bg-blue-600 text-white border-blue-700 mx-1">検　索</button>
    </div>
  </section>
  <section class="max-w-7xl mx-auto bg-white p-10 mt-10">

  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
