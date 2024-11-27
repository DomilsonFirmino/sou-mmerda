<x-layoutAdmin>

    <x-heading> Adicionar curso </x-heading>

    <form action="/dashboard/cursos" method="POST" style="margin-right: 2rem" enctype="multipart/form-data">
        @csrf
        <div>
            <x-input id="name" name="name" label="Titulo do curso" value="{{ old('name')}}" placeholder="email" margin="mt-3"/>

            <x-input id="carga" name="carga" label="Carga horaria" value="{{ old('carga')}}" placeholder="15" margin="mt-3"/>

            <x-textarea  id="body" name="body" placeholder="Your message.... " value="{{old('body')}}" label="Descrição breve"/>

            <x-input id="certificado" name="certificado" label="Entidade certificadora" value="{{old('certificado')}}" placeholder="15" margin="mt-3"/>

            <x-inputfile type="file" name="img" id="img" placeholder="Choose your image" margin="mt-3" label="Image"/>

            <x-inputfile type="file" name="programa" id="programa" placeholder="Choose your pdf" margin="mt-3" label="Programa pdf"/>
        </div>
        <x-formbutton class="mt-3 mb-3">Adicionar curso</x-formbutton>
    </form>


</x-layoutAdmin>
