<x-layoutAdmin>

    <x-heading>
        Eventos
    </x-heading>

    <div class="table-responsive-sm mt-5" style="margin-right: 1.5rem">
            
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-2">Title</th>
                <th scope="col" class="col-1">Duração</th>
                <th scope="col" class="col-1">Data</th>
                <th scope="col" class="col-2">Certificado por</th>
                <th scope="col" class="col-1">Programa</th>
                <th scope="col" class="col-1">Acções</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso )
                    <x-tableRowCurso name="{{$curso->name}}" data="{{$curso->created_at}}" carga="{{$curso->carga}}" cert="{{ $curso->certificado}}" url="download"/>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layoutAdmin>

