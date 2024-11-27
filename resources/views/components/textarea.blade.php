@props(['id','name','placeholder','value','label'=>false])

<div class="mt-3">
    <div>
        @if($label)
            <label for="{{$id}}">{{ $label }}</label>
        @endif
        @if ($errors->has($name))
            <textarea name="{{$name}}" id="{{$id}}" class="w-100 aspect-video mt-2 p-2 border rounded-lg border-danger" value="{{$value}}" placeholder="{{$placeholder}}"></textarea>
        @else
            <textarea name="{{$name}}" id="{{$id}}" class="w-100 aspect-video mt-2 p-2" value="{{$value}}" placeholder="{{$placeholder}}"></textarea>
        @endif
    </div>
    @error('body')
        <p>{{ $message}}</p>
    @enderror
</div>
