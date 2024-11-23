@props(['href', 'class']);

<li class="nav-item">
    <a  {{ $attributes->merge(['class'=>'nav-link'])}} aria-current="page" href="{{$href}}">{{ $slot }}</a>
</li>