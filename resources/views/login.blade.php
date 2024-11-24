<x-layout bg="bg-secondary">
    
    <div class="container" style="padding-bottom: 4rem; padding-top: 8rem">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <div>
                <x-input id="email" type="email" name="email" label="Your Email" value="{{ old('email')}}" placeholder="email@Gmail.com" margin="mt-3"/>
                <x-input id="password" type="password" name="password" label="password" placeholder="*******" margin="mt-3"/>
            </div>
            
            <p class="mt-3">Não tens uma conta? <a href="/register">criar uma</a></p>
            <x-formbutton class="mt-4">Logar</x-formbutton>
        </form>
    </div>

</x-layout>