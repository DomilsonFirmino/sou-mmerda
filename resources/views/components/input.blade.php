@props(['id','name', 'type'=>'text','placeholder','value','label'=>false])
<div class="mt-3">
    <div>
        @if($label)
            <label for="{{$id}}">{{ $label}}</label>
        @endif
        <input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" value="{{$value}}" class="w-100 mt-2 p-2 border rounded-lg">

        @error($name)
            <p>{{ $message}}</p>
        @enderror
    </div>
</div>
