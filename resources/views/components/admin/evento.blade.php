@section('title')
    {{ " | Dashboard -".$evento->name }}
@endsection

<x-layoutAdmin>

    <div style="padding-block: 2rem; margin-right: 2rem">

        <a href="/dashboard/eventos">Voltar</a>

        <div class="mt-5">
            <img src={{ url('storage/'.$evento->img) }} class="img-fluid aspect-square" style="object-position: center;object-fit: cover;height:10rem; aspect-ratio: 2 / 1; overflow: hidden" /></div>

        <div class="pt-5">
            <x-heading>{{ $evento->title }}</x-heading>
        </div>

        <div>
            <h4>Breve descrição</h4>
            <p>{{ $evento->body }}</p>
        </div>

        <div class="d-sm-flex gap-2 mt-3">
            <a href="/dashboard/eventos/{{$evento->id}}/edit" class="btn btn-secondary">editar</a>
            <button class="btn-danger btn" id="show">
                apagar
            </button>

            <dialog>
                <div>
                    <x-headingtwo>Tem certeza ?</x-headingtwo>
                    <p>Tem certeza que deseja remover este evento ?</p>
                </div>
                <div class="mt-3 d-sm-flex justify-content-center gap-2">

                    <button class="btn btn-success" id="close">cancelar</button>

                    <form action="/dashboard/eventos/{{$evento->id}}"  method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">apagar</button>
                    </form>

                </div>
            </dialog>
        </div>

    </div>

</x-layoutAdmin>
