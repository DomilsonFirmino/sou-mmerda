@section('title')
    {{ " | Resetar senha" }}
@endsection

<x-layout bg="bg-secondary">

    <div class="container" style="padding-bottom: 4rem; padding-top: 8rem">
        <h1>Mudar senha</h1>
        <form action="/resetpassword" method="POST">
            @csrf
            <!-- Password Reset Token -->
            <x-input type="hidden" id="token" name="token" value="{{ $token}}" placeholder=""/>

            <x-input id="email" type="email" name="email" label="Your Email" value="{{ old('email')}}" placeholder="email@Gmail.com" margin="mt-3"/>

            <x-input id="password" type="password" name="password" label="Password" placeholder="********" margin="mt-3"/>

            <x-input id="password_confirmation" type="password" name="password_confirmation" label="Password confirmation" placeholder="********" margin="mt-3"/>

            <x-formbutton class="mt-4">Mudar Senha</x-formbutton>
        </form>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>


</x-layout>
