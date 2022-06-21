@extends('layouts.app')

@section('pages')
    <section class="inner-page mt-5">

        <div class="container">
            <div class="row feature-icons" data-aos="fade-up">
                <div class="row">
                    <div class="col-xl-4 text-center d-none d-md-block" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/access.png') }}" class="img-fluid p-4" alt="">
                    </div>
                    <div class="col-xl-8 d-flex content">
                        <form action="/make_payments" method="POST">
                            @csrf
                            <div class="row  gy-4">
                                <span class="text-tonics">Fanya Malipo Hapa!</span>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Chagua Mkoa uliopo</small>
                                        <select class="form-control" name="mkoa" id="">
                                            <option value="">chagua Mkoa...</option>
                                            <option value="mwanza">Mwanza</option>
                                            <option value="dar">Dar</option>
                                        </select>
                                        <small class="text-danger">
                                            @error('mkoa')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Chagua wilaya</small>
                                        <select class="form-control" name="wilaya" id="">
                                            <option value="">chagua Wilaya...</option>
                                            <option value="Nyamagana">Nyamagana</option>
                                            <option value="Ilala">Ilala</option>
                                        </select>
                                        <small class="text-danger">
                                            @error('wilaya')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Ingiza namba ya Simu</small>
                                         <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="nmba ya simu 07...">
                                        <small class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">PIN</small>
                                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="ingiza password..">
                                       <small class="text-danger">
                                           @error('password')
                                               {{ $message }}
                                           @enderror
                                       </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <img src="{{ asset('img/tigopesa.png') }}" class="rounded" width="35px"
                                            height="35px" alt="">
                                        <small class="text-muted mb-2"> <input type="radio" name="payment" value="Tigo Pesa">
                                            Tigo Pesa</small>
                                        <small class="text-danger">

                                            @error('payment')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <img src="{{ asset('img/mpesa.png') }}" class="rounded" width="35px"
                                            height="35px" alt="">
                                        <small class="text-muted mb-2"> <input type="radio" name="payment" value="Airtel Money">
                                            M-Pesa</small>
                                        <small class="text-danger">
                                            @error('payment')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <img src="{{ asset('img/tpesa.png') }}" class="rounded" width="35px"
                                            height="35px" alt="">
                                        <small class="text-muted mb-2"> <input type="radio" name="payment" value="Halo Pesa">
                                            Halo Pesa</small>
                                        <small class="text-danger">
                                            @error('payment')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <img src="{{ asset('img/tpesa.png') }}" class="rounded" width="35px"
                                            height="35px" alt="">
                                        <small class="text-muted mb-2"> <input type="radio" name="payment" value="T-Pesa">
                                            T-Pesa</small>
                                        <small class="text-danger">
                                            @error('payment')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <hr class="mx-3">
                                <div class="row">
                                   
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <h6 class="text-muted">Total Quantity: </h6>
                                        <span class="fw-bold">{{ $cart_data->sum("Quantity") }}</span>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <h6 class="text-muted">Total Costs: </h6>
                                        <span class="fw-bold text-danger">{{$cart_data->sum("Total")}}</span>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end">
                                    <div class="col-md-6 mt-5">
                                        <button type="submit"
                                            class=" btn btn-outline-secondary w-100 text-uppercase  shadow-sm">Lipia</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
