@section('title')
    {{ " | Dashboard - eventos"}}
@endsection

<x-layoutAdmin>

    <x-heading>
        Eventos
    </x-heading>


    <div class="d-sm-flex justify-content-between align-items-center mt-3" style="margin-right: 1.5rem">
        <a href="/dashboard/eventos/create" style="text-decoration:none" style="display: block">adicionar evento</a>
    </div>

    <div class="table-responsive-sm mt-3" style="margin-right: 1.5rem">

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-2">Title</th>
                <th scope="col" class="col-1">Data de inicio</th>
                <th scope="col" class="col-2">Data de inicio</th>
                <th scope="col" class="col-1">Acções</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento )
                    <x-tableRowEvento title="{{$evento->title}}" inicio="{{$evento->data_de_inicio}}" fim="{{$evento->data_de_fim}}" id="{{ $evento->id}}"/>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layoutAdmin>

