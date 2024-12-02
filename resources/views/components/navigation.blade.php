
<nav  {{$attributes->merge(['class'=>'navbar fixed-top navbar-dark navbar-expand-md pt-sm-4 py-4'])}} id="navigation">

    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{url('/images/ilungi.png')}}" alt="ilungi" class="d-block" style="width: 6rem">
        </a>

        <div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/servicos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/servicos/apoioagestao">Apoio a gestão</a></li>
                            <li><a class="dropdown-item" href="/servicos/formacao">Formações a medida</a></li>
                            <li><a class="dropdown-item" href="/servicos/inovacao">Inovação a melhoria</a></li>
                            <li><a class="dropdown-item" href="/servicos/procurement">Procurement</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/solucoes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Soluções
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/solucoes/siclic">SICLIC</a></li>
                            <li><a class="dropdown-item" href="/solucoes/gefor">GEFOR</a></li>
                            <li><a class="dropdown-item" href="/solucoes/solucoesamedida">Soluções a medida</a></li>
                        </ul>
                    </li>

                    <x-nav href="https://scr.ilungi.ao/">
                        School of corporate reputation
                    </x-nav>

                    <x-nav href="/eventos">
                        Eventos
                    </x-nav>

                    <x-nav href="/contatos">
                        Contatos
                    </x-nav>

                    @guest
                        <x-nav href="/register">
                            Register
                        </x-nav>

                        <x-nav href="/login">
                            Login
                        </x-nav>

                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                               @if (Auth::user()->role == "admin")
                                <li><a class="dropdown-item" style="font-weight: 600" href="/dashboard">dasboard</a></li>
                               @endif
                                <li><a class="dropdown-item" style="font-weight: 600" href="/profile">profile</a></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item" style="font-weight: 600" type="submit">Logout</button>
                                </form>
                            </ul>
                        </li>
                    @endauth

                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </div>

</nav>
