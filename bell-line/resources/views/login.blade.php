<x-for_admin-layout>
  <x-slot name="title">ログイン │ ベルライン</x-slot>

  <header class="bg-blue-500 text-white p-4 font-bold shadow-md mb-10">ベルライン　システムメニュー</header>

  <section class="max-w-3xl mx-auto bg-white p-10">
    <h2 class="text-3xl text-center mt-5 mb-15">ベルラインシステム<br>ログイン
    </h2>
    <form action="" class="space-y-5">
      <div>
        <label for="example1" class="mb-1 block text-sm font-medium text-gray-700">ID</label>
        <input type="text" id="id"
          class="block px-5 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"
          placeholder="you@email.com" />
      </div>
      <div>
        <label for="example2" class="mb-1 block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="pass"
          class="block px-5 py-2  w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"
          placeholder="Password" />
      </div>
      <button type="button"
        class="w-full rounded-lg border bg-blue-500 hover:bg-blue-600  border-blue-700 px-5 py-2.5 text-center font-medium text-white shadow-sm transition-all hover:border-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">ログイン</button>
      <p class="mt-10 text-center text-sm text-blue-600"><a href="">パスワードを忘れた場合はこちら</a></p>
    </form>

  </section>

</x-for_admin-layout>
