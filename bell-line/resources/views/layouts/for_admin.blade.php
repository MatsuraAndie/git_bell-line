<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">


  <title>{{ __(config('app.name', 'Laravel')) }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- ↓jqueyの読み込み --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  {{-- ↑jqueyの読み込み --}}
  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
  </script>
  <script>
    window.locale = @json(app()->getLocale());
  </script>
</head>
@php
  $app_img = 'images/036.png';
@endphp


<body class="font-sans antialiased flex flex-col min-h-screen break-words
      bg-yellow-50" {{-- bg-no-repeat bg-cover bg-center" --}}
  {{-- style="background-attachment: fixed;background-image:url('{{ asset($app_img) }}')" --}}>
  <div
    class="fixed w-full lg:items-center lg:pl-6 lg:pr-14 h-16 border-b-2 border-gray-200
              pt-1 pb-2 bg-white z-50">



  </div>
  <div class="fixed z-50 top-24 lg:top-20 right-0 xl:right-44">
    @if (isset($screen_id) && $screen_id != 'M032_show')
      <div>
        @include('common.message')
      </div>
    @endif
    {{-- @include('common.message_ajax') --}}
    @if (isset($screen_id) && (str_contains($screen_id, 'create') || str_contains($screen_id, 'edit')))
      {{-- それぞれの項目でもエラーをだしているはずだから非表示 --}}
    @else
      @if ($errors->any())
        <div
          class="cursor-pointer border-2 p-5 py-3 rounded-md max-h-120 relative bg-white w-full font-bold text-2xl border-red-500 text-red-800 overflow-auto"
          style="max-width: 62rem;word-wrap: break-word; word-break: break-all;">
          @include('common.input_error', ['input_errors' => $errors->all()])
        </div>
      @endif
    @endif
  </div>


  <main class=" pt-28 lg:mx-auto lg:pl-52">
    @php
      $width_value = 71;
    @endphp

    @if (isset($header))
      <header class="bg-white shadow py-3 ml-2 mr-2 lg:mr-0">
        <div
          class="text-yellow-800 font-bold text:xs md:text-lg md:pl-5 flex justify-center lg:justify-start items-center">
          <div class="ml-5 flex-1">
            {{ $header }}
          </div>
        </div>
      </header>
    @endif
    <div>

      {{ $slot }}

    </div>
  </main>
</body>

</html>
