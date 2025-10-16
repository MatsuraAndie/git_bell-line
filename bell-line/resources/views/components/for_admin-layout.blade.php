<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <title>{{ __(config('app.name', 'Laravel')) }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

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

<body>

</body>

</html>
