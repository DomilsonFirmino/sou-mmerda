<footer class="bg-primary py-4 text-white">
    <div class="container">
        <div class="row gx-5">
            <div class="col-sm">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/ilungi.png')}}" alt="ilungi" class="d-block" style="width: 6rem">
                </a>
                <p class="mt-3">Ilungi é uma empresa de direito Angolano dedicada ao fornecimento de soluções a medida e serviços especializados.</p>
            </div>
            <div class="col-sm">
                <h3>Menu</h3>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white">Início</a></li>
                    <li><a href="/servicos" class="text-white">Serviços</a></li>
                    <li><a href="/solucoes" class="text-white">Soluções</a></li>
                    <li><a href="/contatos" class="text-white">Contatos</a></li>
                    <li><a href="/eventos" class="text-white">Eventos</a></li>
                </ul>
            </div>
            <div class="col-sm">
                <h3>Contactos</h3>
                <ul class="list-unstyled">
                    <li>+244 935 793 270</li>
                    <li>geral@ilungi.ao</li>
                    <li>Luanda</li>
                </ul>
            </div>
        </div>

        <div style="border-top: 2px solid white; margin-top: 1rem; border-top-radius: 2rem"></div>

        <div class="row mt-3 justify-content-between">
            <div class="col">
                <p>@ All right reserved Ilungi</p>
            </div>
            <div class="col">
                <p></p>
            </div>
        </div>

        <p class="text-white">{{request()->is(Str::substr("/contatos",1)) ? "active": ""}}</p>
    </div>
</footer>
