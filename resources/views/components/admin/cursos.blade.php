<x-layoutAdmin>

    <x-heading>
        Cursos
    </x-heading>

    <div class="d-sm-flex justify-content-between align-items-center mt-3" style="margin-right: 1.5rem">
        <a href="/dashboard/cursos/create" style="text-decoration:none" style="display: block">adicionar curso</a>
        {{-- <form class="d-flex gap-2">
            <input type="text" name="query" id="query">
            <button type="submit" class="btn btn-primary">Procurar</button>
        </form> --}}
    </div>

    <div class="table-responsive-sm mt-3" style="margin-right: 1.5rem">
            
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
                    <x-tableRowCurso name="{{$curso->name}}" carga="{{$curso->carga}}" cert="{{ $curso->certificado}}" data="{{$curso->created_at}}" url="download"/>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layoutAdmin>

