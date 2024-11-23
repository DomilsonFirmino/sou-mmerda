<h1>Contact Form</h1>
<form action="/message" method="POST">
    @csrf
    <div>
        <x-input id="name" name="name" label="Your Name" value="{{ old('name')}}" placeholder="email"/>


        <x-input id="email" type="email" name="email" label="Your Email" value="{{ old('email')}}" placeholder="email@Gmail.com"/>

        <x-textarea  id="body" name="body" placeholder="Your message.... " value="{{old('body')}}" label="Message"/>

    </div>

    <x-formbutton class="mt-3">Enviar mensaguem</x-formbutton>
</form>
