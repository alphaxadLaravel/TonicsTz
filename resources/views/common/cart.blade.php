@extends('layouts.app')

@section('pages')
    <section class="inner-page">
        <section class="h-100" >
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        @foreach ($cart as $item)
                        <div class="card rounded-3 mb-4" data-aos="fade-down">
                            <div class="card-body p-3">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src={{{$item->computer->picha}}} class="img-fluid rounded-3" alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead text-tonics fw-normal mb-2">{{$item->computer->brand}}</p>
                                        <p><span class="text-muted">HDD: </span>{{$item->computer->hdd}} <span class="text-muted">RAM:
                                            </span>{{$item->computer->ram}}</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p><span class="text-muted">Quantity: </span>{{{$item->Quantity}}} </p>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0"><sub class="text-muted">Tsh</sub> {{$item->Total}}</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                        <div class="card " data-aos="fade-up">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary btn-sm "><i class="mdi mdi-keyboard-backspace"></i>Back to Search</button>
                                    <button type="button" class="btn btn-primary btn-sm ">Proceed to Pay</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection
