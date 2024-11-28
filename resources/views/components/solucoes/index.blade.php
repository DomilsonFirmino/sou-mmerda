@section('title')
{{ "Soluções"}}
@endsection
<x-layout>

    <section id="sep"></section>

    <x-heroImage name="solucoes.jpg" size="50vh">
        <div class="container" style="padding-top: 10rem">
            <h1 class="text-white">Nossas Soluções</h1>
        </div>
    </x-heroImage>


    <div class="album py-5 mt-5">

        <div class="container">

          <div class="row">

            <x-cardimglink src="{{ asset('images/Siclic.png')}}" link="/solucoes/siclic">
                SICLIC
            </x-cardimglink>

            <x-cardimglink src="{{ asset('images/agenda.jpg')}}" link="/solucoes/gefor">
                GEFOR
            </x-cardimglink>

            <x-cardimglink src="{{ asset('images/parceiros.jpg')}}" link="/solucoes/parceiros">
                Soluções a medida
            </x-cardimglink>

          </div>

        </div>

    </div>

</x-layout>
