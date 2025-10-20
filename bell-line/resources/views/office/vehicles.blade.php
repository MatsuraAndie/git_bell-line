<x-for_admin-layout>
  <x-slot name="title">車両登録 │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">事務所メニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>車両登録</li>
    </ul>
  </header>

  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-2 gap-6">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            車両ナンバー</div>
          <input type="text" id="vehiclenumber"
            class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            キーワード</div>
          <input type="text" id="keyword"
            class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
        </div>
      </li>
    </ul>
    <div class="mt-5 flex justify-end">
      <button class="p-2 rounded bg-blue-500 hover:bg-blue-600 text-white border-blue-700 mx-1">検　索</button>
    </div>
  </section>

  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
    <h2 class="flex mb-5 text-blue-700 font-bold">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-car-front-icon lucide-car-front">
        <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
        <path d="M7 14h.01" />
        <path d="M17 14h.01" />
        <rect width="18" height="8" x="3" y="10" rx="2" />
        <path d="M5 18v2" />
        <path d="M19 18v2" />
      </svg>
      &ensp;車両情報
    </h2>
    <div class="grid grid-cols-2 gap-6">
      <ul class="space-y-3">
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              車両ナンバー</div>
            <input type="text" id="name"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              購入日</div>
            <input type="date" id="purchasedate"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li class="mt-5">
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              分類</div>
            <select id="employment-select"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
              <option value="">--</option>
              <option value="normal">普通自動車</option>
              <option value="small">小型自動車</option>
              <option value="light">軽自動車</option>
              <option value="other">その他</option>
            </select>
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              メーカー</div>
            <input type="text" id="maker"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              車種名</div>
            <input type="text" id="carname"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              排気量</div>
            <input type="text" id="displacement"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              積載量</div>
            <input type="text" id="capacity"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li class="mt-5">
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              車検</div>
            <input type="date" id="inspection"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              法定点検</div>
            <input type="text" id="inspection"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              自動車税</div>
            <input type="text" id="tax"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
      </ul>
      <ul class="space-y-3">
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              保険証番号</div>
            <input type="text" id="insurance"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              保険期間</div>
            <input type="text" id="insuranceperiod"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              保険料</div>
            <input type="text" id="kana"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li class="mt-5">
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              備考</div>
            <textarea id="note"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></textarea>
          </div>
        </li>
      </ul>
    </div>
    <ul class="mt-5 flex justify-end">
      <li>
        <button
          class="p-2 rounded border border-gray-700 bg-white hover:bg-gray-300 text-gray-700 mx-1">削&emsp;除</button>
      </li>
      <li>
        <button class="p-2 rounded bg-green-500 hover:bg-green-600 text-white border-green-700 mx-1">登録／更新</button>
      </li>
    </ul>
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
