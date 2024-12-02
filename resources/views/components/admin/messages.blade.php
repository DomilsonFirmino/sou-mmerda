<x-layoutAdmin>

    <x-heading>
        Mensagens
    </x-heading>

    <div class="table-responsive-sm mt-5" style="margin-right: 1.5rem">

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-3">Name</th>
                <th scope="col" class="col-2">Email</th>
                <th scope="col" class="col-2">Criado em</th>
                <th scope="col" class="col-2">Ver mais</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message )
                    <x-tableRowMessage name="{{$message->name}}" email="{{$message->email}}" id="{{$message->id}}" criado="{{ $message->created_at}}"/>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layoutAdmin>

