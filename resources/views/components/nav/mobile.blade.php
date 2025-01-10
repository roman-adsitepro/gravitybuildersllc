@props([
  'href' => '#',
  'slot' => '-',
  'isCurrent' => false
])
<a
  href="{{ $href }}"
  class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium @if($isCurrent) bg-orange-50 border-orange-500 text-orange-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 @endif"
>{{ $slot }}</a>
