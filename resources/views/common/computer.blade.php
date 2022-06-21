@extends('layouts.app')

@section('pages')
    <section class="inner-page mt-5">
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
    
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Lenovo ThinkPard</h2>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <h3><span class="text-muted">Aina: </span>Laptop</h3>
                                </div>
                                <div class="col-md-4">
                                    <h3><span class="text-muted">RAM: </span>2GB</h3>
                                </div>
                                <div class="col-md-4">
                                    <h3><span class="text-muted">HDD: </span>2GB</h3>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h3><span class="text-muted">Processor: </span>Core i3 AMD</h3>
                                </div>
                                <div class="col-md-6">
                                    <h3><span class="text-muted">Generetaion: </span>G1</h3>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h3><span class="text-muted">Hali: </span>Mpya</h3>
                                </div>
                                <div class="col-md-6">
                                    <h2><sup class="text-muted">Tsh: </sup><span class="text-danger">200,000/=</span></h2>
                                </div>
                            </div>
                            <p>Hii Computer iko vizuri haina shida yoyote ile, bei yake haipungui!</p>
                            <div class="text-center text-lg-start">
                                <button
                                    class="btn btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Add to Cart</span>
                                    <i class="bi bi-cart"></i>
                            </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/apple.jpg') }}" class="img-fluid rounded" alt="">
                    </div>
    
                </div>
            </div>
    
        </section>

        <div class="row" data-aos="fade-down">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('img/pc-1.png')}}" width="350px" height="350px" alt=""> 
                <p class="text-muted text-center">Computer ya <span class="text-tonics">vigezo hivyo Haipo!</span> Tutakujulisha itakapo patikana!</p>
                <p class="text-center text-tonics">Tafuta Nyingine Hapa!</p>
            </div>
        </div>

    </section>
@endsection
