<nav class="navbar fixed-top navbar-dark navbar-expand-md pt-sm-4 py-4 " id="navigation">

    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{url('/images/ilungi.png')}}" alt="ilungi" class="d-block" style="width: 6rem">
        </a>

        <div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="font-weight: 600" href="/servicos/gestao">Apoio a gestão</a></li>
                            <li><a class="dropdown-item" style="font-weight: 600" href="/servicos/formacao">Formações a medida</a></li>
                            <li><a class="dropdown-item" style="font-weight: 600" href="/servicos/consultoria">Inovação a melhoria</a></li>
                            <li><a class="dropdown-item" style="font-weight: 600" href="/servicos/branding">Procurement</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Soluções
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/solucoes/siclic">SICLIC</a></li>
                            <li><a class="dropdown-item" href="/solucoes/gefor">GEFOR</a></li>
                            <li><a class="dropdown-item" href="/solucoes/parceiros">Soluções a medida</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://scr.ilungi.ao/">School of corporate reputation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/eventos">Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contatos">Contatos</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Login</a>
                        </li>
                    @endguest

                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </div>

</nav>
