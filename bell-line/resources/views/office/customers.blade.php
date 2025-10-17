<x-for_admin-layout>
  <x-slot name="title">顧客登録 │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">事務所メニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>顧客登録</li>
    </ul>
  </header>

  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-2 gap-6">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            会社名</div>
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
        class="lucide lucide-users-icon lucide-users">
        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
        <path d="M16 3.128a4 4 0 0 1 0 7.744" />
        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
        <circle cx="9" cy="7" r="4" />
      </svg>
      &ensp;顧客情報
    </h2>
    <div class="grid grid-cols-2 gap-6">
      <ul class="space-y-3">
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              会社名</div>
            <input type="text" id="name"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              フリガナ</div>
            <input type="text" id="kana"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              郵便番号</div>
            <input type="text" id="postcode"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              住所</div>
            <input type="text" id="address"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              電話番号</div>
            <input type="tel" id="tel"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              メールアドレス</div>
            <input type="email" id="email"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
      </ul>
      <ul class="space-y-3">
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              担当者名</div>
            <input type="text" id="manager"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              担当者フリガナ</div>
            <input type="text" id="managerkana"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
              担当者電話番号</div>
            <input type="tel" id="managertel"
              class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
          </div>
        </li>
        <li>
          <div class="relative z-0 flex">
            <div
              class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm text-xs">
              担当者メールアドレス</div>
            <input type="email" id="manageremail"
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
    <a href="/"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
