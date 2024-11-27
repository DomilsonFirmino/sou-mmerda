<x-layout bg="bg-secondary">
    <section style="padding-top: 8rem">
        <div class="container py-5">
            <div class="row">
                {{-- <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name}}</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button>
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->name}}</p>
                            </div>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::user()->email}}</p>
                                    </div>
                                </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Role</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Criado em</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->created_at}}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
