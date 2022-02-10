@php
    $attributes = $attributes->class(
    $props['link'] ? [
        'me-1'
    ] : [
        'btn btn-' . $props['style'],
        'w-100' => $props['block'],
    ])->merge($attrs);
@endphp
<a {{ $attributes }}>{!! __($props['label']) !!}</a>
