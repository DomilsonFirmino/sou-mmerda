@section('title')
    {{ " | evento -".$evento->title}}
@endsection
<x-layout bg="bg-secondary">
    <x-heroImage url="{{ url('storage/'.$evento->img) }}" size="70vh">
        <div class="container" style="padding-top: 10rem">
            <h1 class="text-white">{{ $evento->title }}</h1>
        </div>
    </x-heroImage>

    <div class="container mt-5 mb-5"><a href="/eventos">Voltar</a></div>

    <div class="container p-5 border">
        <div>
            <x-headingtwo>
                Descrição
            </x-headingtwo>
            <div>
                <p><span>Inicio:</span> {{ $evento->data_de_inicio}}</p>
                <p><span>Fim:</span> {{ $evento->data_de_fim}}</p>
            </div>


            <p>{{ $evento->body }}</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row gap-5">

        </div>
    </div>

</x-layout>
