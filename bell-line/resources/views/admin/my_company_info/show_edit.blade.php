<x-for_admin-layout>
  <x-slot name="title">
    @if ($screen_id == 'M011_show')
      {{ __('会社情報詳細') }}
    @elseif($screen_id == 'M011_edit')
      {{ __('会社情報編集') }}
    @endif
  </x-slot>
  <x-slot name="screen_id">
    @if (isset($screen_id))
      {{ $screen_id }}
    @endif
  </x-slot>


  <x-slot name="header">
    @if ($screen_id == 'M011_show')
      {{ __('会社情報詳細222') }}
    @elseif($screen_id == 'M011_edit')
      {{ __('会社情報編集') }}
    @endif
  </x-slot>

  {{-- M011_show --}}

  @php
    $form_action = '';
    $form_method = '';
    if ($screen_id == 'M011_edit') {
        $form_action = route('admin.myCompanyInfo.update');
        $form_method = 'post';
    }
  @endphp
  <form method="{{ $form_method }}" action="{{ $form_action }}" enctype="multipart/form-data">
    @csrf
    @if ($screen_id == 'M011_edit')
      @method('patch')
    @endif

    <div class="bg-white w-full my-20 p-20 drop-shadow-lg">
      {{-- ↓メタ情報 --}}
      <div class="flex justify-center text-sm text-gray-600">
        <div>{{ __('作成日時') }}：{{ $my_company_info->created_at->format('Y/m/d H:i') }}</div>
        <div class="ml-10">{{ __('更新日時') }}：{{ $my_company_info->updated_at->format('Y/m/d H:i') }}</div>
      </div>
      {{-- ↑メタ情報 --}}

      {{-- ↓会社情報データ --}}
      @php
        $my_company_infos = [
            [__('会社名'), 'name'],
        ];
        if (isset($my_company_info)) {
            $my_company_infos[0][] = $my_company_info->name;
        } else {
            $my_company_infos[0][] = '';
        }
      @endphp
      <div class="mt-20 mx-auto">
        @foreach ($my_company_infos as $info)
          {{-- ↓会社情報 --}}
          <div class="flex justify-center items-center h-16">
            <div class="font-medium w-40">{{ $info[0] }}</div>
            @if ($screen_id === 'M011_show')
              <div class="w-96 font-bold text-lg">
                {{ $info[2] }}
              </div>
            @else
              <div>
                <input type="text" name="{{ $info[1] }}" class="w-96 border rounded"
                  value="{{ old($info[1], $info[2]) }}">
              </div>
            @endif
          </div>
          {{-- ↑会社情報 --}}
          @include('common.input_error', ['input_errors' => $errors->get($info[1])])
        @endforeach

      </div>
      {{-- ↑会社情報データ --}}


      <div class="mt-14 mr-20 flex justify-center">
        @if ($screen_id == 'M011_show')
          <a href="{{ route('admin.myCompanyInfo.edit') }}"
            class="waiting_btn_admin_1200  p-2 px-5 rounded-full bg-blue-500 hover:bg-blue-600 text-white text-center inline-block">
            {{ __('編集画面へ') }}
          </a>
        @elseif($screen_id == 'M011_edit')
          <button class="waiting_btn_admin_1200  p-2 px-5 rounded-full  bg-blue-600 hover:bg-blue-700 text-white ">
            {{ __('更新実行') }}
          </button>
        @endif
      </div>
    </div>

  </form>

</x-for_admin-layout>
