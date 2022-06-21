@extends('layouts.app')

@section('pages')
    <section class="inner-page mt-5">
            <section id="about" class="about">

                <div class="container" data-aos="fade-up">
                    <div class="row gx-0">
                        @if (Session::has('uploaded'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                Computer uploaded successfully!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @foreach ($matokeo as $computer)
                            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="content">
                                    <h2>{{ ucwords($computer->brand) }}</h2>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <h3><span class="text-muted">Aina: </span>{{ ucwords($computer->category) }}
                                            </h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3><span class="text-muted">RAM: </span>{{ ucwords($computer->ram) }}</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3><span class="text-muted">HDD: </span>{{ ucwords($computer->hdd) }}</h3>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h3><span class="text-muted">Processor:
                                                </span>{{ ucwords($computer->processor) }}
                                            </h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3><span class="text-muted">Generetaion:
                                                </span>{{ ucwords($computer->generation) }}</h3>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h3><span class="text-muted">Hali: </span>{{ ucwords($computer->hali) }}</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h2><sup class="text-muted">Tsh: </sup><span
                                                    class="text-danger">{{ ucwords($computer->price) }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                    {{-- <p>Hii Computer iko vizuri haina shida yoyote ile, bei yake haipungui!</p> --}}
                                    <div class="row gy-3">
                                        <div class="col-md-5  d-flex">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="mdi mdi-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="1"
                                                type="number" class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="text-center text-lg-start">
                                                <a href="/add_cart/{{$computer->id}}"
                                                    class="btn btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <span>Add to Cart</span>
                                                    <i class="bi bi-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center order-1 order-md-2" data-aos="zoom-in"
                                data-aos-delay="200">
                                <img src={{ $computer->picha }} class="img-fluid rounded" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

            </section>
        @if ($matokeo->isEmpty())
            <div class="row" data-aos="fade-down">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('img/pc-1.png') }}" width="350px" height="350px" alt="">
                    <p class="text-muted text-center">Computer ya <span class="text-tonics">vigezo hivyo Haipo!</span>
                        Tutakujulisha itakapo patikana!</p>
                    <p class="text-center text-tonics"><a href="/tafuta_out">Tafuta Nyingine Hapa!</a></p>
                </div>
            </div>
        @endif




    </section>
@endsection
