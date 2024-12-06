@section('title')
    {{ " | Dashboard"}}
@endsection
<x-layoutAdmin>

    <div class="row gap-5 container">
        <div class="col-sm">
            <a href="dashboard/users" style="display: block; text-decoration: none" class="card p-3">
                <p>Users</p>
                <p class="h3">{{ $users->count()}}</p>
            </a>
        </div>

        <div class="col-sm">
            <a href="dashboard/subscrivers" style="display: block; text-decoration: none" class="col card p-3">
                <p>Inscritos</p>
                <p class="h3">{{ $subs->count()}}</p>
            </a>
        </div>

        <div class="col-sm">
            <a href="dashboard/cursos" style="display: block; text-decoration: none" class="col card p-3">
                <p>Cursos</p>
                <p class="h3">{{ $cursos->count()}}</p>
            </a>
        </div>

        <div class="col-sm">
            <a href="dashboard/eventos" style="display: block; text-decoration: none" class="col card p-3">
                <p>Eventos</p>
                <p class="h3">{{ $cursos->count()}}</p>
            </a>
        </div>

        <div class="col-sm">
        <a href="dashboard/messages" style="display: block; text-decoration: none" class="col card p-3">
            <p>Mensagens</p>
            <p class="h3">{{ $messages->count()}}</p>
        </a>
        </div>
    </div>

</x-layoutAdmin>

