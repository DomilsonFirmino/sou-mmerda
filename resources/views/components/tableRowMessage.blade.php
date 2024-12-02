@props(['name', 'email','criado','id'=>'id'])
<tr>
    <td>{{ $name }}</td>
    <td>{{ $email }} </td>
    <td>{{ $criado }}</td>
    <td>
        <a href="/dashboard/messages/{{$id}}" class="btn text-success">Ver</a>
        <button class="text-danger btn" id="show">
            apagar
        </button>
    </td>
</tr>

<dialog>
    <div>
        <x-headingtwo>Tem certeza ?</x-headingtwo>
        <p>Tem certeza que deseja remover esta mensaguem ?</p>
    </div>
    <div class="mt-3 d-sm-flex justify-content-center gap-2">

        <button class="btn btn-success" id="close">cancelar</button>

        <form action="/dashboard/messages/{{$id}}"  method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">apagar</button>
        </form>

    </div>
</dialog>
