<x-layoutAdmin>

    <x-heading>
        Subscrivers
    </x-heading>

    <div class="mt-5">
        @foreach ($subs as $sub )
            <div class="mt-5">
                <p>{{ $sub->name }}</p>
                <p>{{ $sub->email }}</p>
            </div>
        @endforeach
    </div>




</x-layoutAdmin>

