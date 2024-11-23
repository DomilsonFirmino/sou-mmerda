@props(['id','name', 'type'=>'text','placeholder','value','label'=>false])
<div>
    <div>
        @if($label)
            <label for="{{$id}}">{{ $label}}</label>
        @endif
        <input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" value="{{$value}}" {{$attributes->merge(['class'=>'w-100 p-2 border rounded-lg'])}}>

        @error($name)
            <p>{{ $message}}</p>
        @enderror
    </div>
</div>
