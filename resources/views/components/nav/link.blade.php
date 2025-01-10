@props([
  'href' => '#',
  'slot' => '-',
  'isCurrent' => false
])
<a
  href="{{ $href }}"
  class="inline-flex items-center border-b-2 @if($isCurrent) border-orange-500 text-gray-900 @else border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 @endif px-1 pt-1 text-sm font-medium"
>{{ $slot }}</a>
