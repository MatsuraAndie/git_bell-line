<x-for_admin-layout>
  <x-slot name="title">日報 │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">ドライバーメニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>日報</li>
    </ul>
  </header>

  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="max-w-xl">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            日付</div>
          <input type="date" id="data" value="<?php echo date('Y-m-d'); ?>"
            class="block w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            ドライバー名</div>
          <select name="driver"
            class="block w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
        </div>
      </li>
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            車両名</div>
          <select name="car"
            class="block w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
        </div>
      </li>
    </ul>
  </section>
  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
    <h2 class="flex mb-5 text-blue-700 font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="lucide lucide-pencil-line-icon lucide-pencil-line">
        <path d="M13 21h8" />
        <path d="m15 5 4 4" />
        <path
          d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
      </svg>
      &ensp;業務内容</h2>
    <ul class="grid grid-cols-12 gap-5">
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            荷主名</div>
          <select name="shipper"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
          </select>
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            積み</div>
          <select name="stack"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
          </select>
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            卸し</div>
          <select name="wholesale"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
          </select>
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            金額</div>
          <input name="money" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            ハーフ金額</div>
          <input name="halfmoney" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            距離</div>
          <input name="distance" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex text-xs items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            高速代金（個人）</div>
          <input name="high-personal" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex text-xs items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            高速代金（指定）</div>
          <input name="high-designation" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            燃料</div>
          <input name="high-designation" type="number"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            受領書</div>
          <input name="receipt"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex text-xs items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            破損/事故/寝坊</div>
          <input name="accident"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex text-xs items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-2/6">
            回収パレット</div>
          <input name="palette"
            class="block w-4/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-8">
        <div class="relative z-0 flex">
          <div
            class="inset-y-0 left-0 flex items-center justify-center rounded-md rounded-r-none border border-r-0 border-gray-300 bg-gray-100 px-2  w-1/6">
            備考</div>
          <input name="memo"
            class="block w-5/6 px-5 py-2 border rounded-md rounded-l-none border-gray-300 shadow-sm focus:z-10 focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
        </div>
      </li>
      <li class="col-span-4 flex justify-end">
        <button class="w-3/5 p-2 rounded bg-green-600 hover:bg-green-800 text-white mx-1">追　加</button>

      </li>
    </ul>
  </section>

  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
  </section>
  <div class="text-center mt-10">
    <a href="/"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
