@section('title')
    {{ " | Resetar senha link" }}
@endsection

<x-layout bg="bg-secondary">

    <div class="container" style="padding-bottom: 4rem; padding-top: 8rem">
        <h1>Resetar senha</h1>
        <p>Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.</p>

        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <form action="/resetar" method="POST" class="mt-3">
            @csrf
            <div>
                <x-input id="email" type="email" name="email" label="Seu Email" value="{{ old('email')}}" placeholder="email@Gmail.com" margin="mt-3"/>
            </div>
            <x-formbutton class="mt-4">Enviar email com link</x-formbutton>
        </form>
    </div>


</x-layout>
