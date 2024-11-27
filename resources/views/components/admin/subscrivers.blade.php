<x-layoutAdmin>

    <x-heading>
        Subscrivers
    </x-heading>
   
    <div class="table-responsive-sm mt-5" style="margin-right: 1.5rem">
            
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="col-3">Name</th>
                <th scope="col" class="col-2">Email</th>
                <th scope="col" class="col-2">Criado em</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subs as $sub )
                    <x-tableRowUser name="{{$sub->name}}" email="{{$sub->email}}" data="{{ $sub->created_at}}"/>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layoutAdmin>

