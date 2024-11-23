@props(['id','name', 'type'=>'text','placeholder','value'=>"",'label'=>false,'margin'=>'mt-0'])
<div>
    <div class="{{ $margin }}">
        @if($label)
            <label for="{{$id}}">{{ $label}}</label>
        @endif

        @if ($errors->has($name))
            
            <input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" value="{{$value}}" {{$attributes->merge(['class'=>'mt-2 w-100 p-2 border rounded-lg border-danger'])}}>

        @else
        
            <input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" value="{{$value}}" {{$attributes->merge(['class'=>'mt-2 w-100 p-2 border rounded-lg'])}}>
            
        @endif


        @error($name)
            <p class="mt-2 text-danger">{{ $message}}</p>
        @enderror
    </div>
</div>
