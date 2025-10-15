@extends('layouts.app')
@section('title', '会社情報登録 │ ベルライン')

@section('content')
  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex">
    <ul class="flex items-center">
      <li><a href="/">事務所メニュー</a></li>
      <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
          <path d="m6 17 5-5-5-5" />
          <path d="m13 17 5-5-5-5" />
        </svg></li>
      <li>会社情報登録</li>
    </ul>
  </header>

  @php
    $form_action = '';
    $form_method = '';
    if ($screen_id == 'M011_edit') {
        $form_action = route('admin.myCompanyInfo.update');
        $form_method = 'post';
    }
  @endphp

  <section class="max-w-5xl mx-auto bg-white p-10">
    <form method="{{ $form_method }}" action="{{ $form_action }}" enctype="multipart/form-data">
      @csrf
      @if ($screen_id == 'M011_edit')
        @method('patch')
      @endif

      {{-- ↓メタ情報 --}}
      <div class="text-xs text-gray-600 flex justify-end">
        <ul>
          <li>{{ __('作成日時') }}：{{ $my_company_info->created_at->format('Y/m/d H:i') }}</li>
          <li>{{ __('更新日時') }}：{{ $my_company_info->updated_at->format('Y/m/d H:i') }}</li>
        </ul>
      </div>
      {{-- ↑メタ情報 --}}


      <div class="mt-8 grid lg:grid-cols-2 gap-4">
        <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">会社名</label> <input type="text"
            name="name" id="name"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="Enter your name" /> </div>
        <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">振込銀行口座</label> <input
            type="text" name="email" id="email"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="yourmail@provider.com" /> </div>
        <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">郵便番号</label> <input
            type="text" name="job" id="job"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="(ex. developer)" /> </div>
        <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">振込先支店</label> <input
            type="text" name="brithday" id="brithday"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="(01/01/1993)" /> </div>
        <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">住所</label> <input type="text"
            name="name" id="name"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="Enter your name" /> </div>
        <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">振込先口座種類</label> <input
            type="text" name="email" id="email"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="yourmail@provider.com" /> </div>
        <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">電話番号</label> <input
            type="text" name="job" id="job"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="(ex. developer)" /> </div>
        <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">振込先口座番号</label> <input
            type="text" name="brithday" id="brithday"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="(01/01/1993)" /> </div>
        <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">メールアドレス</label> <input
            type="text" name="name" id="name"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="Enter your name" /> </div>
        <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">備考</label> <input type="text"
            name="email" id="email"
            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
            placeholder="yourmail@provider.com" /> </div>
      </div>

      <div class="space-x-4 mt-8 flex justify-center">

        <button type="submit"
          class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
        <button
          class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
      </div>

    </form>
  </section>
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
      <div class="flex justify-center items-center space-x-4">
        <label class="w-40 font-semibold">{{ $info[0] }}</label>
        @if ($info[1] === 'note')
          <textarea name="{{ $info[1] }}" class="w-96 border rounded p-2">{{ old($info[1], $info[2]) }}</textarea>
        @else
          <input type="text" name="{{ $info[1] }}" value="{{ old($info[1], $info[2]) }}"
            class="w-96 border rounded p-2">
        @endif
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

@endsection
