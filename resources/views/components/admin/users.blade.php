<x-layoutAdmin>

    <x-heading>
        Users
    </x-heading>
    <div class="container">
        <div class="mt-5">
            @foreach ($users as $user )
                <div class="mt-5">
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                </div>
            @endforeach
        </div>
    </div>




</x-layoutAdmin>

