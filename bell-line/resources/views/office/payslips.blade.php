<x-for_admin-layout>
  <x-slot name="title">給与明細出力 │ ベルライン</x-slot>

  @include('common.header-office', ['title' => '給与明細出力'])

  <section class="max-w-7xl mx-auto bg-white p-10">

  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
