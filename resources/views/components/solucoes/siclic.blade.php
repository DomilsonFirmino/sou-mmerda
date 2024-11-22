@section('title')
{{ " | Siclic" }}
@endsection
<x-layout>
    <x-heroImage name="Siclic.png" size="60vh" id="sep">
        <div class="container" style="padding-top: 8rem">
            <img src="{{asset('images/Logos/logo_Siclic.png')}}" alt="" class="logo">
            <h2 class="uppercase text-white text-uppercase">SICLIC</h2>
        </div>
    </x-heroImage>
    <div class="container my-5">
        <div class="row gx-5">
            <div class="col-sm">
                <h2>SICLIC</h2>
                <p class="h2 mt-4">Sistema de gestão de relacionamento com cliente e contratos</p>
            </div>
            <div class="col-sm">
                <p>Solução cloud para a gestão do relacionamento com o cliente baseada em 4 conceitos: O potencial cliente, o cliente, o contrato e o relatório.As relações não são feitas entre empresas mas sim entre pessoas que as representam, e o SICLIC é uma ferramenta que auxilia na gestão do relacionamento com o cliente e um dos objetivos desse recurso é organizar e fidelizar o consumidor</p>
                <x-button url="http://www.siclic.ao/"> visitar pagina</x-button>
            </div>
        </div>
    </div>
</x-layout>
