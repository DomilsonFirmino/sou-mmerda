@section('title')
    {{ " | Dashboard - inscritos"}}
@endsection
<x-layoutAdmin>

    <x-heading>
        Inscritos
    </x-heading>

    <div class="table-responsive-sm mt-5" style="margin-right: 1.5rem">

        <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-3">Name</th>
                <th scope="col" class="col-2">Email</th>
                <th scope="col" class="col-2">Criado em</th>
                <th scope="col" class="col-2">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subs as $sub )
                    <x-tableRowSubs name="{{$sub->id}}" email="{{$sub->email}}" data="{{ $sub->created_at}}" id="{{$sub->id}}"/>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layoutAdmin>

