@extends('layouts.app')

@section('pages')
<section class="inner-page">
    <section class="h-100">
        <div class="container h-100">
            


            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    @if (session()->has('success'))
                    <div class="alert alert-success fade show" data-aos="fade-down" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger fade show" data-aos="fade-down" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                    </div>
                    @endif

                    @foreach ($cart as $item)
                    <div class="card rounded-3 mb-4" data-aos="fade-down">
                        <div class="card-body p-3">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src={{{$item->computer->picha}}} class="img-fluid rounded-3" alt="">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead text-tonics fw-normal mb-2">{{$item->computer->brand}}
                                        ({{$item->computer->generation}}) <small>{{$item->computer->processor}}</small>
                                    </p>
                                    <p><span class="text-muted">HDD: </span>{{$item->computer->hdd}} <span
                                            class="text-muted">RAM:
                                        </span>{{$item->computer->ram}}</p>
                                </div>

                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0"><sub class="text-muted">Tsh</sub>
                                        {{number_format($item->computer->price)}}/=</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @if (count($cart) > 0)
                    <div class="card " data-aos="fade-up">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="/remove/{{$item->id}}" class="btn btn-outline-danger btn-sm "><i
                                        class="mdi mdi-delete"></i>Remove Computer</a>
                                <a href="/checkout/{{$item->id}}" type="button"
                                    class="btn btn-primary btn-sm ">Proceed to Pay</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row" data-aos="fade-down">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('img/pc-1.png') }}" width="350px" height="350px" alt="">
                            <p class="text-muted text-center">Hakuna Computer uliyohifadhi kwaajili ya kununua!</p>
                            <p class="text-center text-tonics"><a href="/tafuta_out">Tafuta Computer Hapa!</a></p>
                        </div>
                    </div>
                    @endif

                    

                </div>
            </div>
        </div>
    </section>

</section>
@endsection