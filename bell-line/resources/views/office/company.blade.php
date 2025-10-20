<x-for_admin-layout>
  <x-slot name="title">会社情報 │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">事務所メニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>会社情報</li>
    </ul>
  </header>

  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
    <h2 class="flex mb-5 text-blue-700 font-bold">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-school-icon lucide-school">
        <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
        <path d="M18 5v16" />
        <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
        <path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
        <path d="M6 5v16" />
        <circle cx="12" cy="9" r="2" />
      </svg>
      &ensp;会社情報
    </h2>

    <form action="{{ route('company.update') }}" method="POST">
      @csrf

      {{-- 左カラム --}}
      <div class="grid grid-cols-2 gap-6">
        <ul class="space-y-3">
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                会社名</div>
              <input type="text" name="name" value="{{ old('name', $my_company_info->name ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                郵便番号</div>
              <input type="text" name="zip" value="{{ old('zip', $my_company_info->zip ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                住所</div>
              <input type="text" name="address" value="{{ old('address', $my_company_info->address ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                電話番号</div>
              <input type="tel" name="tel" value="{{ old('tel', $my_company_info->tel ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                メールアドレス</div>
              <input type="email" name="email" value="{{ old('email', $my_company_info->email ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">
            </div>
          </li>
        </ul>
        <ul class="space-y-3">
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                振込先銀行</div>
              <input type="text" name="bank_name" value="{{ old('bank_name', $my_company_info->bank_name ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                振込先支店</div>
              <input type="text" name="bank_branch"
                value="{{ old('bank_branch', $my_company_info->bank_branch ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                口座種類</div>
              <input type="text" name="bank_type" value="{{ old('bank_type', $my_company_info->bank_type ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
            </div>
          </li>
          <li>
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                口座番号</div>
              <input type="text" name="bank_number"
                value="{{ old('bank_number', $my_company_info->bank_number ?? '') }}"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
            </div>
          </li>
          <li class="mt-5">
            <div class="relative z-0 flex">
              <div
                class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
                備考</div>
              <textarea name="note"
                class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">{{ old('note', $my_company_info->note ?? '') }}</textarea>
            </div>
          </li>
        </ul>
      </div>

      <ul class="mt-5 flex justify-end">
        <li>
          <button class="p-2 rounded bg-green-500 hover:bg-green-600 text-white border-green-700 mx-1">登録／更新</button>
        </li>
      </ul>

      {{-- 成功メッセージ --}}
      @if (session('success'))
        <div class="text-green-600 text-center mt-3">{{ session('success') }}</div>
      @endif
    </form>
  </section>

  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
