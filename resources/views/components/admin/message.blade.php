@section('title')
    {{ " | Dashboard -".$messague->name }}
@endsection

<x-layoutAdmin>

    <div style="padding-block: 2rem; margin-right: 2rem">

        <a href="/dashboard/messages">Voltar</a>

        <div class="pt-5">
            <x-heading>
                <span>Enviado por:</span> {{ $messague->name}}
            </x-heading>
            <p>email: {{ $messague->email}} </p>
        </div>

        <div>
            <h4>Mensaguem</h4>
            <p>{{ $messague->message }}</p>
        </div>

        <div class="d-sm-flex gap-2 mt-3">
            <button class="btn-danger btn" id="show">
                apagar
            </button>

            <dialog>
                <div>
                    <x-headingtwo>Tem certeza ?</x-headingtwo>
                    <p>Tem certeza que deseja remover este messague ?</p>
                </div>
                <div class="mt-3 d-sm-flex justify-content-center gap-2">

                    <button class="btn btn-success" id="close">cancelar</button>

                    <form action="/dashboard/messages/{{$messague->id}}"  method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">apagar</button>
                    </form>

                </div>
            </dialog>
        </div>

    </div>

</x-layoutAdmin>
