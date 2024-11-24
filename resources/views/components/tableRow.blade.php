@props(['curso', 'carga','cert', 'url'])
<tr class='clickable-row' onclick="window.location='{{$url}}'">
    <td>{{ $curso }}</td>
    <td>{{ $carga }} horas</td>
    <td>{{ $cert }}</td>
</tr>