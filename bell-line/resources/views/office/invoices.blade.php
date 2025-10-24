<x-for_admin-layout>
  <x-slot name="title">請求書出力 │ ベルライン</x-slot>

  @include('common.header_office', ['title' => '請求書出力'])

  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-2 gap-6">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            日付</div>
          <input type="month" id="date"
            class="w-4/6 rounded-md border-gray-300 p-3 text-lg shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            荷主名</div>
          <select name="shipper"
            class="w-4/6 rounded-md border-gray-300 p-3 text-lg shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50"></select>
        </div>
      </li>
    </ul>
    <ul class="mt-5 flex justify-end">
      <li>
        <button class="p-2 rounded bg-green-500 hover:bg-green-600 text-white border-green-700 mx-1">検　索</button>
      </li>
      <li>
        <button class="p-2 rounded bg-violet-500 hover:bg-violet-600 text-white border-violet-700 mx-1">出　力</button>
      </li>
    </ul>
  </section>
  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
