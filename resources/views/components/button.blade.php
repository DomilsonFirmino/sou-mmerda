@props(['url' => "/"])
<a href="{{$url}}" class="btn btn-secondary mt-sm-4 py-2 px-5 rounded-pill text-uppercase h6 fw-bold">
    {{ $slot }}
</a>
