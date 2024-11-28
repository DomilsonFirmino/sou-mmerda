@section('title')
{{ " | Serviços" }}
@endsection

<x-layout>

    <section id="sep"></section>

    <x-heroImage name="services.jpg" size="60vh">
        <div class="container" style="padding-top: 10rem">
            <h1 class="text-white">Nossos Serviços</h1>
        </div>
    </x-heroImage>

    <div class="album py-5 mt-5">

        <div class="container">

          <div class="row">

            <x-cardimglink src="{{ asset('images/apoioagestao.jpg')}}" link="/servicos/apoioagestao">
                Apoio a gestão
            </x-cardimglink>

            <x-cardimglink src="{{ asset('images/formacoes.jpg')}}" link="/servicos/formacao">
                Formações
            </x-cardimglink>

            <x-cardimglink src="{{ asset('images/inovacao.jpg')}}" link="/servicos/inovacao">
                Inovação e melhoria
            </x-cardimglink>

            <x-cardimglink src="{{ asset('images/inovacao.jpg')}}" link="/servicos/procurement">
                Procurement
            </x-cardimglink>

          </div>

        </div>

    </div>

</x-layout>
