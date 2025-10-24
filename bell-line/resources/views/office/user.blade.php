<x-for_admin-layout>
  <x-slot name="title">ユーザー管理 │ ベルライン</x-slot>

  @include('common.header_office', ['title' => 'ユーザー管理'])

  <section class="max-w-7xl mx-auto bg-white p-10">
    <div class="flex justify-end">
      <a href="{{ route('office.user_create') }}"><button type="button"
          class="flex rounded-lg border border-violet-500 bg-violet-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-violet-700 hover:bg-violet-700 focus:ring focus:ring-violet-200 disabled:cursor-not-allowed disabled:border-violet-300 disabled:bg-violet-300">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-user-plus-icon lucide-user-plus mr-2">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <line x1="19" x2="19" y1="8" y2="14" />
            <line x1="22" x2="16" y1="11" y2="11" />
          </svg>
          新規登録
        </button></a>
    </div>
    <ul class="mt-5 rounded-lg border border-gray-200 shadow-md">
      <li class="w-full border border-gray-200 bg-white text-left px-10 py-5">
        <ul class="flex justify-between items-center">
          <li class="w-1/6">
            <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-gray-200">
              <svg class="h-1/2 w-1/2 text-secondary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                  d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z">
                </path>
              </svg>
            </div>
          </li>
          <li class="w-4/6">
            <span class="block font-bold">事務所</span>
            <p class="text-xl pl-5">システム太郎</p>
          </li>
          <li class="w-1/6">
            <button type="button"
              class="rounded-full border border-blue-100 bg-blue-100 px-5 py-2.5 text-center text-sm font-medium text-blue-600 transition-all hover:border-blue-200 hover:bg-blue-200 focus:ring focus:ring-blue-50 disabled:border-blue-50 disabled:bg-blue-50 disabled:text-blue-400">
              詳細</button>
            <button type="button"
              class="rounded-full border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-100 focus:ring focus:ring-gray-100 disabled:cursor-not-allowed disabled:border-gray-100 disabled:bg-gray-50 disabled:text-gray-400">削除</button>
          </li>
        </ul>
      </li>
      <li class="w-full border border-gray-200 bg-white text-left px-10 py-5">
        <ul class="flex justify-between items-center">
          <li class="w-1/6">
            <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-gray-200">
              <svg class="h-1/2 w-1/2 text-secondary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                  d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z">
                </path>
              </svg>
            </div>
          </li>
          <li class="w-4/6">
            <span class="block font-bold">事務所</span>
            <p class="text-xl pl-5">システム次郎</p>
          </li>
          <li class="w-1/6">
            <button type="button"
              class="rounded-full border border-blue-100 bg-blue-100 px-5 py-2.5 text-center text-sm font-medium text-blue-600 transition-all hover:border-blue-200 hover:bg-blue-200 focus:ring focus:ring-blue-50 disabled:border-blue-50 disabled:bg-blue-50 disabled:text-blue-400">
              詳細</button>
            <button type="button"
              class="rounded-full border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-100 focus:ring focus:ring-gray-100 disabled:cursor-not-allowed disabled:border-gray-100 disabled:bg-gray-50 disabled:text-gray-400">削除</button>
          </li>
        </ul>
      </li>
      <li class="w-full border border-gray-200 bg-white text-left px-10 py-5">
        <ul class="flex justify-between items-center">
          <li class="w-1/6">
            <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-gray-200">
              <svg class="h-1/2 w-1/2 text-secondary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                  d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z">
                </path>
              </svg>
            </div>
          </li>
          <li class="w-4/6">
            <span class="block font-bold">ドライバー</span>
            <p class="text-xl pl-5">ドライバー太郎</p>
          </li>
          <li class="w-1/6">
            <button type="button"
              class="rounded-full border border-blue-100 bg-blue-100 px-5 py-2.5 text-center text-sm font-medium text-blue-600 transition-all hover:border-blue-200 hover:bg-blue-200 focus:ring focus:ring-blue-50 disabled:border-blue-50 disabled:bg-blue-50 disabled:text-blue-400">
              詳細</button>
            <button type="button"
              class="rounded-full border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-100 focus:ring focus:ring-gray-100 disabled:cursor-not-allowed disabled:border-gray-100 disabled:bg-gray-50 disabled:text-gray-400">削除</button>
          </li>
        </ul>
      </li>
      <li class="w-full border border-gray-200 bg-white text-left px-10 py-5">
        <ul class="flex justify-between items-center">
          <li class="w-1/6">
            <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-gray-200">
              <svg class="h-1/2 w-1/2 text-secondary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                  d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z">
                </path>
              </svg>
            </div>
          </li>
          <li class="w-4/6">
            <span class="block font-bold">ドライバー</span>
            <p class="text-xl pl-5">ドライバー次郎</p>
          </li>
          <li class="w-1/6">
            <button type="button"
              class="rounded-full border border-blue-100 bg-blue-100 px-5 py-2.5 text-center text-sm font-medium text-blue-600 transition-all hover:border-blue-200 hover:bg-blue-200 focus:ring focus:ring-blue-50 disabled:border-blue-50 disabled:bg-blue-50 disabled:text-blue-400">
              詳細</button>
            <button type="button"
              class="rounded-full border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-100 focus:ring focus:ring-gray-100 disabled:cursor-not-allowed disabled:border-gray-100 disabled:bg-gray-50 disabled:text-gray-400">削除</button>
          </li>
        </ul>
      </li>
    </ul>
    <div class="mt-5">
      <div class="flex justify-center">
        <nav aria-label="Pagination">
          <ul class="inline-flex items-center space-x-1 rounded-md text-sm">
            <li>
              <a href="#"
                class="inline-flex items-center space-x-2 rounded-md border border-gray-300 bg-white px-4 py-2 font-medium text-gray-500 hover:bg-gray-50">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <span class="inline-flex items-center rounded-md bg-white px-4 py-2 text-gray-500">Page <b
                  class="mx-1">1</b> of <b class="ml-1">10</b></span>
            </li>
            <li>
              <a href="#"
                class="inline-flex items-center space-x-2 rounded-md border border-gray-300 bg-white px-4 py-2 font-medium text-gray-500 hover:bg-gray-50">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
