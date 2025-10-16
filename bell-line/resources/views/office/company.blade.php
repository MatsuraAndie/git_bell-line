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

  <section class="max-w-5xl mx-auto bg-white p-10">
    <form action="{{ route('company.update') }}" method="POST" class="space-y-4">
      @csrf

      @php
        $infos = [
            ['会社名', 'name', $my_company_info->name ?? ''],
            ['郵便番号', 'zip', $my_company_info->zip ?? ''],
            ['住所', 'address', $my_company_info->address ?? ''],
            ['電話番号', 'tel', $my_company_info->tel ?? ''],
            ['メールアドレス', 'email', $my_company_info->email ?? ''],
            ['振込先銀行', 'bank_name', $my_company_info->bank_name ?? ''],
            ['振込先支店', 'bank_branch', $my_company_info->bank_branch ?? ''],
            ['口座種類', 'bank_type', $my_company_info->bank_type ?? ''],
            ['口座番号', 'bank_number', $my_company_info->bank_number ?? ''],
            ['備考', 'note', $my_company_info->note ?? ''],
        ];
      @endphp

      @foreach ($infos as $info)
        <div class="mt-8">
          <div><label class="text-sm text-gray-700 block mb-1 font-medium">{{ $info[0] }}</label>
            <input type="text" name="{{ $info[1] }}" value="{{ old($info[1], $info[2]) }}"
              class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
          </div>
        </div>
        @error($info[1])
          <div class="text-red-500 text-sm text-center">{{ $message }}</div>
        @enderror
      @endforeach

      <div class="text-center mt-6">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded">保存</button>
      </div>

      @if (session('success'))
        <div class="text-green-600 text-center mt-3">{{ session('success') }}</div>
      @endif
    </form>

  </section>
  <div class="text-center mt-10">
    <a href="/"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
