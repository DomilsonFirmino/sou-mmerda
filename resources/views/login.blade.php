@section('title')
    {{ " | Login" }}
@endsection

<x-layout bg="bg-secondary">

    <div class="container" style="padding-bottom: 4rem; padding-top: 8rem">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <div>
                <x-input id="email" type="email" name="email" label="Your Email" value="{{ old('email')}}" placeholder="email@Gmail.com" margin="mt-3"/>
                <x-input id="password" type="password" name="password" label="password" placeholder="*******" margin="mt-3"/>
            </div>

            <div class="d-sm-flex justify-content-between">
                <p class="mt-3 col">Não tens uma conta? <a href="/register">criar uma</a></p>
                <p class="mt-3"><a href="/resetar">Esqueceu a senha?</a></p>
            </div>
            <x-formbutton class="mt-4">Logar</x-formbutton>
        </form>

    </div>

</x-layout>
