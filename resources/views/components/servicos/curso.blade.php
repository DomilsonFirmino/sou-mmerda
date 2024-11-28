@section('title')
    {{ " | curso -".$curso->name}}
@endsection
<x-layout bg="bg-secondary">
    <x-heroImage url="{{ url('storage/'.$curso->img) }}" size="70vh">
        <div class="container" style="padding-top: 10rem">
            <h1 class="text-white">{{ $curso->name }}</h1>
        </div>
    </x-heroImage>

    <div class="container mt-5">
        <div class="row gap-5">
            <div class="col-sm-auto">
                <p><span>Duração:</span> {{ $curso->carga}} horas </p>
                <p><span>Certificado por: </span>{{ $curso->certificado }}</p>
                <a href="/servicos/formacao">Voltar</a>
                <a href="{{$curso->url}}" class="link-secondary"></a>
            </div>
            <div class="col-sm">

                <h3>Descrição</h3>
                <p>{{ $curso->body }}</p>
                <div class="mt-3 mb-5">
                    <a href="/servicos/formacao/curso/{{$curso->id}}/download" class="btn btn-secondary">baixar programa</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
