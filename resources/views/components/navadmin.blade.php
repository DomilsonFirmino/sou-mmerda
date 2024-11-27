@props(['href'])
@php
    $status = request()->is($href) ? "active text-white" : "link-dark ";
@endphp
<li>
    <a href="/{{$href}}" class="nav-link {{ $status }}">
        {{ $slot }}
    </a>
</li>