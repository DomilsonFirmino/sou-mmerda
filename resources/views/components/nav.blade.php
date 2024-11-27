@props(['href', 'class']);

@php
    $status = request()->is($href) ? "active" : "";
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class'=>'nav-link '.$status])}} aria-current="page" href="/{{$href}}">{{ $slot }}</a>
</li>