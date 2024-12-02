<x-layoutProfile bg="bg-light">
    <div class="container">
        <section class="container my-5 p-5 border rounded bg-white">
            <h3>Informações do perfil</h3>
            <div class="row mt-5">
                <div class="col-sm">
                    <p class="h5">Name</p>
                    <p>{{Auth::user()->name}}</p>
                </div>
                <div class="col-sm mt-sm-0 mt-5">
                    <p class="h5">Email</p>
                    <p>{{Auth::user()->email}}</p>
                </div>
            </div>
        </section>
    </div>
    <div class="container mt-5">
        <section class="container my-5 p-5 border rounded bg-white">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h3>Mudar senha</h3>
            <form action="/profile/{{Auth::user()->id}}" method="POST">
                @csrf
                @method('patch')
                <div>
                    <x-input id="current_password" type="password" name="current_password" label="Password Atual" placeholder="*******" margin="mt-3"/>

                    <x-input id="password" type="password" name="password" label="Nova password" placeholder="*******" margin="mt-3"/>

                    <x-input id="password_confirmation" type="password" name="password_confirmation" label="Confirmar Password" placeholder="*******" margin="mt-3"/>
                </div>

                <button type="submit" class="btn-success btn mt-3">
                    Alterar Password
                </button>
            </form>
        </section>
    </div>

    <div class="container mt-5">
        <section class="container my-5 p-5 border rounded bg-white">
            <h3>Remover Conta </h3>
            <p class="mt-5">
                Depois que sua conta for excluída, todos os seus dados serão excluídos permanentemente. Se for como deseja prosseguir preccione o botão em baixo
            </p>

            <button class="btn-danger btn" id="show">
                Apagar conta
            </button>

            <dialog>
                <div>
                    <x-headingtwo>Tem certeza ?</x-headingtwo>
                    <p>Tem certeza que deseja remover a sua conta ?</p>
                </div>
                <div class="mt-3 d-sm-flex justify-content-center gap-2">

                    <div class="row">
                        <form action="/profile/{{Auth::user()->id}}" class="col-sm" method="POST" id="delete" name="delete">
                            @csrf
                            @method('delete')
                            <x-input label="Senha" id="password" name="password" type="password" placeholder="*********"/>
                        </form>
                        <div class="mt-3">
                            <button class="btn btn-success" id="close">cancelar</button>
                            <button type="submit" class="btn btn-danger" form="delete">apagar</button>
                        </div>
                    </div>

                </div>
            </dialog>
        </section>
    </div>

</x-layoutProfile>
