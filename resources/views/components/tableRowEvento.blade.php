@props(['title', 'inicio','fim','id'=>'id'])
<tr>
    <td>{{ $title }}</td>
    <td>{{ $inicio }} </td>
    <td>{{ $fim }}</td>
    <td>
        <a href="/dashboard/eventos/{{$id}}">Ver mais</a>
    </td>
</tr>
