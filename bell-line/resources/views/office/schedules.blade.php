<x-for_admin-layout>
  <x-slot name="title">配車スケジュール管理 │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-2 font-bold shadow-md mb-10 flex justify-between items-center">
    <ul class="flex items-center">
      <li><a href="{{ route('office.menu') }}">事務所メニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>配車スケジュール管理</li>
    </ul>
    <div class="flex flex-wrap items-center justify-center gap-3 mr-20">
      <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-300">
        <svg class="h-1/2 w-1/2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
          fill="currentColor">
          <path
            d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z">
          </path>
        </svg>
      </div>

      <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex items-center">
          <span class="text-sm font-medium mr-1">事務所太郎</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </button>

        <!-- Dropdown -->
        <ul x-show="open" @click.outside="open = false" x-transition
          class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg text-gray-700 text-sm z-10">
          <li>
            <a href="#" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
              詳細
            </a>
          </li>
          <li>
            <a href="#" class="px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
              ログアウト
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="max-w-8xl mx-auto bg-white p-10">
    <ul class="max-w-4xl grid grid-cols-2 gap-6">
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
            ドライバー</div>
          <select name="driver"
            class="block w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
        </div>
      </li>
    </ul>
  </section>
  <section class="max-w-8xl mx-auto bg-white p-10">

    <div class="flex justify-end">
      <button type="button"
        class="flex rounded-lg border border-violet-500 bg-violet-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-violet-700 hover:bg-violet-700 focus:ring focus:ring-violet-200 disabled:cursor-not-allowed disabled:border-violet-300 disabled:bg-violet-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-calendar-clock-icon lucide-calendar-clock mr-2">
          <path d="M16 14v2.2l1.6 1" />
          <path d="M16 2v4" />
          <path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5" />
          <path d="M3 10h5" />
          <path d="M8 2v4" />
          <circle cx="16" cy="16" r="6" />
        </svg>
        新規スケジュール登録
      </button>
    </div>

    <div class="overflow-x-scroll mt-5">
      <table class="mb-10 w-full whitespace-nowrap border-collapse bg-white text-left text-sm">
        <thead class="bg-gray-50">
          <tr class="border border-gray-500">
            <th scope="col" class="w-xl p-2 font-medium border border-gray-500 "></th>
            <th scope="col" class="w-xl p-2 font-medium border border-gray-500">ドライバー名</th>
            <th scope="col" class="p-4 font-medium border border-gray-500">車番</th>
            <th scope="col" colspan="2"
              class="max-w-3xs p-2 font-medium  text-center border-3 text-white border-red-500 bg-red-500">朝便</th>
            <th scope="col" colspan="2"
              class="max-w-3xs p-2 font-medium text-center text-white border-3 border-amber-400 bg-amber-400">昼便
            </th>
            <th scope="col" colspan="2"
              class="max-w-3xs p-2 font-medium text-center text-white border-3 border-indigo-400 bg-indigo-400">夜便
            </th>
            <th scope="col" colspan="2"
              class="max-w-3xs p-2 font-medium border-3 text-center text-white border-pink-700 bg-pink-700">積置</th>
            <th scope="col" class="max-w-3xs p-2 font-medium border text-center border-gray-500">備考１</th>
            <th scope="col" class="max-w-3xs p-2 font-medium border text-center border-gray-500">備考２</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="px-4 py-8  border flex justify-between text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                <path
                  d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-archive-x-icon lucide-archive-x">
                <rect width="20" height="5" x="2" y="3" rx="1" />
                <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                <path d="m9.5 17 5-5" />
                <path d="m9.5 12 5 5" />
              </svg>
            </th>
            <th class="p-4 border border-gray-500">ドライバー太郎</th>
            <td class="p-4 text-center  border border-gray-500">1581<span class="block text-xs mt-2">10:00</span></td>
            <td class="p-4 text-center border-l-3 border-b-3 border-red-500">MFJ</td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-red-500">スタバ空カート</td>

            <td class="p-4 text-center border-b-3 border-amber-400">1197<span class="block text-xs mt-2">10:00</span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-amber-400">スタバ空カート</td>

            <td class="p-4 text-center border-b-3 border-indigo-400">1197<span class="block text-xs mt-2">10:00</span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-indigo-400">スタバ空カート</td>

            <td class="p-4 text-center border-b-3 border-pink-700">MFJ<span class="block text-xs mt-2">10:00</span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-pink-700">山梨行き空</td>

            <th class="w-lg p-2 border border-gray-500 font-normal">スタバ空カート</th>
            <td class="w-lg p-2 border border-gray-500">スタバ空カート</td>
          </tr>
          <tr>
            <th class="px-4 py-8  border flex justify-between text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                <path
                  d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-archive-x-icon lucide-archive-x">
                <rect width="20" height="5" x="2" y="3" rx="1" />
                <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                <path d="m9.5 17 5-5" />
                <path d="m9.5 12 5 5" />
              </svg>
            </th>
            <th class="p-4 border border-gray-500">ドライバー次郎</th>
            <td class="p-4 border border-gray-500 text-center">954<span class="block text-xs mt-2">08:00</span></td>
            <td class="p-4 text-center border-l-3 border-b-3 border-red-500"></td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-red-500"></td>

            <td class="p-4 text-center border-b-3 border-amber-400">松本<span class="block text-xs mt-2">12:00</span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-amber-400">緑13:00～東扇島×2<br>（土曜休み）36000
            </td>

            <td class="p-4 text-center border-b-3 border-indigo-400">ロジテム</span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-indigo-400">流山21:50~相模原<br>28000　1:30</td>

            <td class="p-4 text-center border-b-3 border-pink-700"><span class="block text-xs mt-2"></span>
            </td>
            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-pink-700"></td>

            <th class="w-lg p-2 border border-gray-500 font-normal"></th>
            <td class="w-lg p-2 border border-gray-500"></td>
          </tr>
          <tr>
            <th class="px-4 py-8  border flex justify-between text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                <path
                  d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-archive-x-icon lucide-archive-x">
                <rect width="20" height="5" x="2" y="3" rx="1" />
                <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                <path d="m9.5 17 5-5" />
                <path d="m9.5 12 5 5" />
              </svg>
            </th>
            <th class="p-4 border border-gray-500">ドライバー三郎</th>
            <td class="p-4 text-center  border border-gray-500">94<span class="block text-xs mt-2">08:00</span></td>

            <td class="p-4 text-center border-l-3 border-b-3 border-red-500">OS1</td>
            <td colspan="5" class="w-lg p-2 text-center border-r-3 border-b-3 border-red-500">松本</td>

            <td class="w-lg p-2 text-center border-b-3 border-pink-700">MFJ<span class="block text-xs mt-2">18:30</td>

            <td class="w-lg p-2 text-center border-r-3 border-b-3 border-pink-700">スタバ・チルド便</td>

            <th class="w-lg p-2 border border-gray-500 font-normal">松本</th>
            <td class="w-lg p-2 border border-gray-500">小山～平塚</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
