@section('title')
    {{ " | Formações" }}
@endsection

<x-layout>
    
    
    <section id="sep"></section>

    <x-heroImage name="Siclic.png" size="60vh" id="sep">
        <div class="container" style="padding-top: 4rem">
            <h2 class="uppercase text-white text-uppercase">Formações</h2>
        </div>
    </x-heroImage>   

    <div class="container my-5">
        <h3 class="text-center" style="font-weight: 600">Tabela de cursos</h3>

        <div class="cursos table-responsive-sm mt-5">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="col-3">Curso</th>
                    <th scope="col" class="col-2">Carga Horaria</th>
                    <th scope="col" class="col-2">Certificação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                        <x-tableRow curso="{{ $curso->name}}" carga="{{$curso->carga}}" cert="{{ $curso->certificado}}" url='/' />
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-layout>