<x-for_admin-layout>
  <x-slot name="title">スケジュール │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">ドライバーメニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>スケジュール</li>
    </ul>
  </header>

  <section class="max-w-7xl mx-auto bg-white p-10">
    <p>※メモ※<br>
      事務所メニュー＞配車スケジュール管理で編集・登録したものがここに出力される<br>
      内容は一日のドライバーの配送先一覧
    </p>
  </section>

  <div class="text-center mt-10">
    <a href="/"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
