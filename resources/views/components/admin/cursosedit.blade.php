@section('title')
    {{ " | Dashboard -  / editar"}}
@endsection

<x-layoutAdmin>

    <x-heading> Editar curso </x-heading>

    <form action="/dashboard/cursos/{{$curso->id}}" method="POST" style="margin-right: 2rem" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <x-input id="name" name="name" label="Titulo do curso" value="{{ $curso->name}}" placeholder="email" margin="mt-3"/>

            <x-input id="carga" name="carga" label="Carga horaria" value="{{ $curso->carga}}" placeholder="15" margin="mt-3"/>

            <x-textarea  id="body" name="body" placeholder="Your message.... " value="{{$curso->body}}" label="Descrição breve"/>

            <x-input id="certificado" name="certificado" label="Entidade certificadora" value="{{$curso->certificado}}" placeholder="15" margin="mt-3"/>

            <x-inputfile type="file" name="img" id="img" placeholder="Choose your image" margin="mt-3" label="Image"/>

            <x-inputfile type="file" name="programa" id="programa" placeholder="Choose your pdf" margin="mt-3" label="Programa pdf"/>
        </div>
        <div>
            <x-formbutton class="mt-3 mb-3">Atualizar curso</x-formbutton>
            <a href="/dashboard/cursos/{{$curso->id}}" class="btn-danger btn py-2 px-5 rounded-pill text-uppercase h6 fw-bold m-0">cancelar</a>
        </div>
    </form>


</x-layoutAdmin>
