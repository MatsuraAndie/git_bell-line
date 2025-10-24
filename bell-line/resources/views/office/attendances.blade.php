<x-for_admin-layout>
  <x-slot name="title">勤怠管理 │ ベルライン</x-slot>

  @include('common.header_office', ['title' => '勤怠管理'])

  <section class="max-w-8xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-2 gap-6">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            ドライバー名</div>
          <select name="driver"
            class="w-4/6 p-5 rounded-md border-gray-300 py-3 text-xl shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50"></select>
        </div>
      </li>
    </ul>
    <div class="mt-5 flex justify-end">
      <button class="p-2 rounded bg-blue-500 hover:bg-blue-600 text-white border-blue-700 mx-1">検　索</button>
    </div>
  </section>

  <section class="max-w-8xl mx-auto bg-white p-10">
    <div class="flex justify-between content-end mb-5">
      <h3 class="font-bold text-xl">{{ $currentMonth->format('Y年 n月') }}</h3>
      <ul class="flex items-center gap-4">
        <li>
          <a href="{{ route('attendances.index', ['month' => $prevMonth]) }}"
            class="px-3 py-1 rounded hover:bg-blue-400">&laquo; 前月</a>
        </li>
        <li>
          <a href="{{ route('attendances.index', ['month' => $nextMonth]) }}"
            class="px-3 py-1 rounded hover:bg-blue-400">翌月 &raquo;</a>
        </li>
      </ul>
    </div>

    @php
      // 従業員データをこのBlade内に記述
      $employees = [
          [
              'name' => '小高 太郎',
          ],
          [
              'name' => '佐藤 花子',
          ],
      ];
    @endphp

    <table class="min-w-max border-collapse border border-gray-300 text-center text-sm">
      <thead>
        <tr class="bg-green-50">
          <th class="border border-gray-300 px-3 py-2 w-40">従業員氏名</th>
          @foreach ($dates as $d)
            <th
              class="border border-gray-300 px-2 py-1
              {{ $d['is_today'] ? 'bg-green-300 font-bold' : '' }}
              {{ $d['is_sunday'] ? 'text-red-500' : '' }}
              {{ $d['is_saturday'] ? 'text-blue-500' : '' }}">
              <div>{{ $d['day'] }}</div>
              <div class="text-xs">{{ $d['weekday'] }}</div>
            </th>
          @endforeach
        </tr>
      </thead>

      <tbody>
        @foreach ($employees as $emp)
          <tr>
            <td class="border border-gray-300 px-2 py-3 text-left font-medium w-40">
              <div class="text-base">{{ $emp['name'] }}</div>
            </td>

            @foreach ($dates as $i => $d)
              <td class="border border-gray-300 px-2 py-2 text-gray-700">

              </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
