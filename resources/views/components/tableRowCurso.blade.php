@props(['name', 'carga','cert','data','id'=>'id'])
<tr>
    <td>{{ $name }}</td>
    <td>{{ $carga }} horas</td>
    <td>{{ $data }}</td>
    <td>{{ $cert }}</td>
    <td>
        <a href="/dashboard/cursos/{{$id}}">Ver mais</a>
    </td>
</tr>
