@props(['id','name','placeholder','value','label'=>false])

<div class="mt-3">
    <div>
        @if($label)
            <label for="{{$id}}">{{ $label }}</label>
        @endif
        @if ($errors->has($name))
            <textarea name="{{$name}}" id="{{$id}}" class="w-100 aspect-video mt-2 p-2 border rounded-lg border-danger" placeholder="{{$placeholder}}"></textarea>
        @else
            <textarea name="{{$name}}" id="{{$id}}" class="w-100 aspect-video mt-2 p-2" placeholder="{{$placeholder}}">{{$value}}</textarea>
        @endif
    </div>
    @error($name)
        <p>{{ $message}}</p>
    @enderror
</div>
