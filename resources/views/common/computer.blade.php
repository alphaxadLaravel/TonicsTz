@extends('layouts.app')

@section('pages')
<section class="inner-page mt-5">
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                
                @foreach ($matokeo as $computer)
                <div class="col-12 d-flex flex-column flex-lg-row  justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="">
                        <img src={{ $computer->picha }} style="height: 400px;" class="w-100 rounded" alt="">
                    </div>
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
                                <h2><sup class="text-muted">Tsh: </sup><span class="text-danger">{{
                                        number_format($computer->price) }}</span>
                                </h2>
                            </div>
                        </div>
                        {{-- <p>Hii Computer iko vizuri haina shida yoyote ile, bei yake haipungui!</p> --}}
                        <div class="row gy-3">
                            <div class="col-md-7">
                                <div class="text-center text-lg-start">
                                    <a href="/add_cart/{{$computer->id}}"
                                        class="btn btn-read-more">
                                        <span>Add Cart</span>
                                        <i class="bi bi-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 order-1 order-md-2" data-aos="zoom-in" data-aos-delay="200">
                    <img src={{ $computer->picha }} style="height: 500px;" class="w-100 rounded" alt="">
                </div> --}}
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