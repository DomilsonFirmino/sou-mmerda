@section('title')
    {{ " | Register" }}
@endsection

<x-layout bg="bg-secondary">
    
    <div class="container" style="padding-bottom: 3rem; padding-top: 10rem">
        <h1>Registro</h1>
        <form action="/register" method="POST">
            @csrf
            <div>
                <x-input id="name" name="name" label="Your Name" value="{{ old('name')}}" placeholder="email" margin="mt-3"/>
                <x-input id="email" type="email" name="email" label="Your Email" value="{{ old('email')}}" placeholder="email@Gmail.com" margin="mt-3"/>
                <x-input id="password" type="password" name="password" label="Password" placeholder="********" margin="mt-3"/>
                <x-input id="password_confirmation" type="password" name="password_confirmation" label="Password confirmation" placeholder="********" margin="mt-3"/>
            </div>

            <p class="mt-3">Já tens uma conta? <a href="/login">iniciar sessão</a></p>
            <x-formbutton class="mt-3">Cadastrar</x-formbutton>
        </form>
    </div>
    
</x-layout>