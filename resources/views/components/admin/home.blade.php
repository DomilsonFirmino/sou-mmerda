<x-layoutAdmin>

    <div class="row gap-5 container">
        <a href="dashboard/users" style="display: block; text-decoration: none" class="col card p-3">
            <h3>Users</h3>
            {{ $users->count()}}
        </a>
        <a href="dashboard/subscrivers" style="display: block; text-decoration: none" class="col card p-3">
            <h3>Subscribers</h3>
            {{ $subs->count()}}
        </a>
        <a href="dashboard/cursos" style="display: block; text-decoration: none" class="col card p-3">
            <h3>Cursos</h3>
            {{ $cursos->count()}}
        </a>
    </div>

</x-layoutAdmin>

