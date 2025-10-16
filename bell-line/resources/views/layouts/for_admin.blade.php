<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'ベルライン　システムメニュー' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

  {{-- メインコンテンツ --}}
  <main>
    {{ $slot }}
  </main>

  {{-- フッター --}}
  <footer class="text-center text-gray-500 text-xs py-4">
    © {{ date('Y') }} Bell Line
  </footer>
</body>

</html>
