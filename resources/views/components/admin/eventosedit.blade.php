@section('title')
    {{ " | Dashboard - evento / editar"}}
@endsection

<x-layoutAdmin>

    <x-heading> Editar evento </x-heading>

    <form action="/dashboard/eventos/{{$evento->id}}" method="POST" style="margin-right: 2rem" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <x-input id="title" name="title" label="Titulo do evento" value="{{$evento->title}}" placeholder="email" margin="mt-3"/>

            <x-textarea  id="body" name="body" placeholder="Your message.... " value="{{$evento->body}}" label="Descrição breve"/>

            <x-inputfile type="file" name="img" id="img" placeholder="Escolha uma imagem" margin="mt-3" label="Image"/>

            <x-input type="date" name="data_de_inicio" id="data_de_inicio" placeholder="Escolha a data de inicio" value="{{$evento->data_de_inicio}}" margin="mt-3"/>

            <x-input type="date" name="data_de_fim" id="data_de_fim" placeholder="Escolha a data de inicio" value="{{$evento->data_de_fim}}" margin="mt-3"/>
        </div>
        <div>
            <x-formbutton class="mt-3 mb-3">Atualizar evento</x-formbutton>
            <a href="/dashboard/eventos/{{$evento->id}}" class="btn-danger btn py-2 px-5 rounded-pill text-uppercase h6 fw-bold m-0">cancelar</a>
        </div>
    </form>


</x-layoutAdmin>
