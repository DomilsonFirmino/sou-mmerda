@props(['curso', 'carga','cert','url'])
<tr>
    <td><a href="./formacao/curso/{{$url}}" style="text-decoration: none">{{ $curso }}</a></td>
    <td>{{ $carga }} horas</td>
    <td>{{ $cert }}</td>
</tr>
