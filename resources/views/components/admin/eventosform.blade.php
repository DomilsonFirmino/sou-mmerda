@section('title')
    {{ " | Dashboard - cursos / create"}}
@endsection

<x-layoutAdmin>

    <x-heading> Adicionar evento </x-heading>

    <form action="/dashboard/eventos" method="POST" style="margin-right: 2rem" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input id="title" name="title" label="Titulo do evento" value="{{ old('title')}}" placeholder="email" margin="mt-3"/>

            <x-textarea  id="body" name="body" placeholder="Your message.... " value="{{old('body')}}" label="Descrição breve"/>

            <x-inputfile type="file" name="img" id="img" placeholder="Escolha uma imagem" margin="mt-3" label="Image"/>

            <x-input type="date" name="data_de_inicio" id="data_de_inicio" placeholder="Escolha a data de inicio" margin="mt-3" value="{{old('data_de_inicio')}}"/>

            <x-input type="date" name="data_de_fim" id="data_de_fim" placeholder="Escolha a data de inicio" margin="mt-3" value="{{old('data_de_fim')}}"/>
        </div>
        <x-formbutton class="mt-3 mb-3">Adicionar evento</x-formbutton>
    </form>


</x-layoutAdmin>
