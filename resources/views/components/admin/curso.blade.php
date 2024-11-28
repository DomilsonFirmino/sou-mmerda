@section('title')
    {{ " | Dashboard -".$curso->name }}
@endsection

<x-layoutAdmin>

    <div style="padding-block: 2rem; margin-right: 2rem">

        <a href="/dashboard/cursos">Voltar</a>

        <div class="mt-5">
            <img src={{ url('storage/'.$curso->img) }} class="img-fluid aspect-square" style="object-position: center;object-fit: cover;height:10rem; aspect-ratio: 2 / 1; overflow: hidden" /></div>

        <div class="pt-5">
            <x-heading>{{ $curso->name }}</x-heading>
            <p><span>Duração:</span> {{ $curso->carga}} horas |  <span> Certificado por: </span>{{ $curso->certificado }}</p>
        </div>

        <div>
            <h4>Breve descrição</h4>
            <p>{{ $curso->body }}</p>
        </div>

        <div>
            <p>{{ $curso->body }}</p>
            <a href="/dashboard/cursos/{{$curso->id}}/download">
                Baixar programa
            </a>
        </div>

        <div class="d-sm-flex gap-2 mt-3">
            <a href="/dashboard/cursos/{{$curso->id}}/edit" class="btn btn-secondary">editar</a>
            <button class="btn-danger btn" id="show">
                apagar
            </button>

            <dialog>
                <div>
                    <x-headingtwo>Tem certeza ?</x-headingtwo>
                    <p>Tem certeza que deseja remover este curso ?</p>
                </div>
                <div class="mt-3 d-sm-flex justify-content-center gap-2">

                    <button class="btn btn-success" id="close">cancelar</button>

                    <form action="/dashboard/cursos/{{$curso->id}}"  method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">apagar</button>
                    </form>

                </div>
            </dialog>
        </div>

    </div>

</x-layoutAdmin>
