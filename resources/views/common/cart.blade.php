@extends('layouts.app')

@section('pages')
    <section class="inner-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-3">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('img/pc-3.webp') }}" class="img-fluid rounded-3" alt="">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead text-tonics fw-normal mb-2">Lenovo thinkPard</p>
                                        <p><span class="text-muted">HDD: </span>500GB <span class="text-muted">RAM:
                                            </span>2GB</p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="mdi mdi-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="2" type="number"
                                            class="form-control form-control-sm" />

                                        <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="mdi mdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0"><sub class="text-muted">Tsh</sub> 499,000/=</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
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
