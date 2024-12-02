@props(['name', 'email','data','id'])
<tr>
    <td>{{ $name }}</td>
    <td>{{ $email }}</td>
    <td>{{ $data }}</td>
    <td>
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

        <form action="/dashboard/subscrivers/{{$id}}"  method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">apagar</button>
        </form>

    </div>
</dialog>
