<header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10 flex justify-between items-center">
  <ul class="flex items-center">
    <li><a href="{{ route('office.menu') }}">事務所メニュー</a></li>
    <li class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-chevrons-right-icon lucide-chevrons-right">
        <path d="m6 17 5-5-5-5" />
        <path d="m13 17 5-5-5-5" />
      </svg></li>
    <li>{{ $title }}</li>
  </ul>
  @include('common.header_part')
</header>
