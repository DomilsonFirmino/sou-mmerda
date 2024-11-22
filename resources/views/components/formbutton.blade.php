@props(['type' =>'submit'])
<button type="submit" {{$attributes->merge(['class' =>'btn btn-secondary py-2 px-5 rounded-pill text-uppercase h6 fw-bold m-0'])}}>{{$slot}}</button>
