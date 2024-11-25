<x-layout bg="bg-secondary">
    <div class="container" style="padding-block: 8rem 5rem">
        <a href="/servicos/formacao" class="btn btn-secondary">Voltar</a>
        <div class="pt-5">
            <x-heading>{{ $curso->name }}</x-heading>
            <p><span>Duração:</span> {{ $curso->carga}} horas |  <span> Certificado por: </span>{{ $curso->certificado }}</p>
        </div>
        <p>{{ $curso->body }}</p>
        <a href="{{$curso->url}}" class="link-secondary">saber mais</a>
        <div class="mt-3">
            <a href="/servicos/formacao/curso/{{$curso->id}}/download">baixar programa</a>
        </div>
    </div>
</x-layout>
