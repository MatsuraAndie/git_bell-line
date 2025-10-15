<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>@yield('title', 'ベルラインシステム')</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body class="bg-gray-100">

  <main>@yield('content')</main>
</body>

</html>
