@props(['status'])
<span class="{{ $status->cssClass() }} text-white py-1 px-2 rounded-lg text-xs">{{ $status->name() }}</span>
