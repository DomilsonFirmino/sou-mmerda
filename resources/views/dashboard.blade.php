<x-layout bg="bg-secondary">
    
    <div class="container" style="padding-block: 8rem 4rem">

        <x-heading>Users</x-heading>
        <div class="mt-5">
            @foreach ($users as $user )
                <div class="mt-5">
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                </div>
            @endforeach
        </div>
        
        <x-heading>SubscriBers</x-heading>
        
        <div class="mt-5">
            @foreach ($subs as $sub )
                <div class="mt-5">
                    <p>{{ $sub->name }}</p>
                </div>
            @endforeach
        </div>

        <x-heading>Cursos</x-heading>
        
        <div class="mt-5">
            @foreach ($cursos as $curso )
                <div class="mt-5">
                    <p>{{ $curso->name }}</p>
                    <p>{{ $curso->carga }} horas</p>
                </div>
                <p>Empresa: {{ $curso->certificado}}</p>
            @endforeach
        </div>
    </div>
</x-layout>

