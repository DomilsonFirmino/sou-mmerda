<x-layoutAdmin>

    <x-heading>
        Cursos
    </x-heading>

    <div class="mt-5">
        @foreach ($cursos as $curso )
            <div class="mt-5">
                <p>{{ $curso->name }}</p>
                <p>{{ $curso->carga }} horas</p>
            </div>
            <p>Empresa: {{ $curso->certificado}}</p>
        @endforeach
    </div>





</x-layoutAdmin>

