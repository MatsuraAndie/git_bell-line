@if ($input_errors)
  <ul class="space-y-1 list-none">
    @foreach ((array) $input_errors as $input_error)
      <li class="text-red-600 font-bold">{{ $input_error }}</li>
    @endforeach
  </ul>
@endif
