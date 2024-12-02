@section('title')
    {{ " | eventos - todos" }}
@endsection

<x-layout>
    <x-heroImage name="eventos.jpg" class="separator" size="50vh">
        <div class="container">
            <h1 class="text-white">TODOS EVENTOS</h1>
        </div>
    </x-heroImage>

    <div class="album py-5 bg-light mt-5">

      <div class="container">

        <div class="row">

            @foreach ($eventos as $evento )
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 180px; width: 100%; display: block; object-fit: cover; object-position: top" src="{{ url('storage/'.$evento->img) }}" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, et quibusdam tempore vel repellendus ipsum fuga quaerat eligendi perferendis voluptatem ea quae iusto, eaque consectetur ex est voluptas repudiandae officiis?Praesentium numquam cum nisi eligendi natus esse ipsum, unde quidem officiis, quisquam quia iste aperiam explicabo. Repellat, dolorem voluptatibus. Optio quis impedit hic quidem eos alias labore nisi ipsa repellat?
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/eventos/{{$evento->id}}" class="btn btn-sm btn-outline-secondary">saber mais</a>
                        </div>
                        <small class="text-muted">{{ $evento->created_at }}</small>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

        </div>

      </div>

    </div>
</x-layout>
