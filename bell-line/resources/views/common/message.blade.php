@if (session()->exists('message'))
  @if (session()->get('message') != '')
    <div
      class="cursor-pointer border-2 p-5 py-3 rounded-md max-h-120
              relative bg-white w-full font-bold text-2xl
              border-yellow-500 text-yellow-800 overflow-auto"
      id="message" style="max-width: 62rem;word-wrap: break-word; word-break: break-all;">
      {!! session('message') !!}
    </div>
  @endif
  @php
    session()->forget('message');
  @endphp
@endif
