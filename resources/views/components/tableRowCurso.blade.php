@props(['name', 'carga','cert','data','url','id'=>'id'])
<tr>
    <td>{{ $name }}</td>
    <td>{{ $carga }} horas</td>
    <td>{{ $data }}</td>
    <td>{{ $cert }}</td>
    <td>{{ $url }}</td>
    <td>
        <a href="#">Ver mais</a>
    </td>
</tr>
