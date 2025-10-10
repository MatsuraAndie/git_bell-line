<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ベルライン システム</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>
<body class="bg-gray-100">
  <header class="bg-gray-200 p-4 font-bold">ベルライン　システムメニュー</header>
  <main class="p-6">@yield('content')</main>
</body>
</html>
