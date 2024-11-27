<x-layoutAdmin>

    <div class="row gap-5 container">
        <a href="dashboard/users" style="display: block; text-decoration: none" class="col card p-3">
            <p>Users</p>
            <p class="h3">{{ $users->count()}}</p>
        </a>
        <a href="dashboard/subscrivers" style="display: block; text-decoration: none" class="col card p-3">
            <p>Subscribers</p>
            <p class="h3">{{ $subs->count()}}</p>
        </a>
        <a href="dashboard/cursos" style="display: block; text-decoration: none" class="col card p-3">
            <p>Cursos</p>
            <p class="h3">{{ $cursos->count()}}</p>
        </a>
        
        <a href="dashboard/eventos" style="display: block; text-decoration: none" class="col card p-3">
            <p>Eventos</p>
            <p class="h3">{{ $cursos->count()}}</p>
        </a>
    </div>

</x-layoutAdmin>

