@props(['name', 'size' => '100vh'])

@php
    $url = asset("images/".$name);
@endphp

<section {{$attributes(['class' => 'hero'])}} style="background-image: url({{ $url }}); background-position: center; display: grid; min-block-size: {{ $size }}">
    {{ $slot }}
</section>