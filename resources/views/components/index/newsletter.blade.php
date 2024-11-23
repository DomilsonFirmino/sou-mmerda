<x-section>
    <div class="container">
        <div>
            <x-heading style="text-align: center">NewsLetter</x-heading>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, in! Molestias, fugiat illo repellendus quam, earum ad consectetur quae totam facere maxime quis aperiam odio voluptatem aliquam, distinctio praesentium quidem?</p>
        </div>
        <form action="/subscribe" class="row align-items-center mt-3 " id="newsletter">

            <div class="d-md-inline-flex align-items-start justify-content-center gap-3 px-3">

                <x-input id="name" name="name" value="{{ old('name')}}" placeholder="email"/>

                <x-input id="email" type="email" name="email" value="{{ old('email')}}" placeholder="email@Gmail.com"/>

                <div>
                    <x-formbutton class="mt-md-0 mt-3">Subscrever</x-formbutton>
                </div>
            </div>

        </form>
    </div>
</x-section>
