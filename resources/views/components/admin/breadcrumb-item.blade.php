@props(['link' => null])
<li>
    <a class="font-medium" href="{{ $link }}">{{ $slot }} /</a>
</li>
