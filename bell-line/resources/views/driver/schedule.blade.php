<x-for_admin-layout>
  <x-slot name="title">スケジュール │ ベルライン</x-slot>

  @include('common.header_driver', ['title' => 'スケジュール'])

  <section class="max-w-7xl mx-auto bg-white p-10">
    <p>※メモ※<br>
      事務所メニュー＞配車スケジュール管理で編集・登録したものがここに出力される<br>
      内容は一日のドライバーの配送先一覧
    </p>
  </section>

  <div class="text-center mt-10">
    <a href="{{ route('driver.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
