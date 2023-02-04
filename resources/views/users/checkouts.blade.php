@extends('layouts.app')

@section('pages')
<section class="inner-page mt-5">
    <div class="container">
        <div class="row feature-icons" data-aos="fade-up">
            <div class="row">
                <div class="col-xl-4 text-center d-none d-md-block" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset($cart_data->computer->picha) }}" class="img-fluid rounded p-4" alt="">
                </div>
                <div class="col-xl-8 d-flex content">
                    <form action="/make_payments" method="POST">
                        @csrf
                        {{-- compcomputer_id --}}
                        <input type="hidden" name="computer_id" value="{{ $cart_data->computer->id }}">
                        <div class="row  gy-4">
                            <span class="text-tonics">Fanya Malipo Hapa!</span>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Chagua Mkoa uliopo</small>
                                    <select class="form-control" name="mkoa" id="">
                                        <option value="">-- chagua Mkoa --</option>
                                        <option value="Arusha">Arusha</option>
                                        <option value="Dar es Salaam">Dar es Salaam</option>
                                        <option value="Dodoma">Dodoma</option>
                                        <option value="Mwanza">Mwanza</option>
                                        <option value="Mbeya">Mbeya</option>
                                        <option value="Tanga">Tanga</option>
                                        <option value="Morogoro">Morogoro</option>
                                        <option value="Rukwa">Rukwa</option>
                                        <option value="Kilimanjaro">Kilimanjaro</option>
                                        <option value="Kigoma">Kigoma</option>
                                        <option value="Tabora">Tabora</option>
                                        <option value="Iringa">Iringa</option>
                                        <option value="Kilimanjaro">Kilimanjaro</option>
                                        <option value="Shinyanga">Shinyanga</option>
                                        <option value="Mara">Mara</option>
                                        <option value="Shinyanga">Shinyanga</option>
                                        <option value="Kagera">Kagera</option>
                                        <option value="Ruvuma">Ruvuma</option>
                                        <option value="Singida">Singida</option>
                                        <option value="Njombe">Njombe</option>
                                        <option value="Lindi">Lindi</option>
                                        <option value="Manyara">Manyara</option>
                                        <option value="Geita">Geita</option>
                                        <option value="Simiyu">Simiyu</option>
                                        <option value="Mbeya">Mbeya</option>
                                        <option value="Zanzibar">Zanzibar </option>
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
                                    <small class="text-muted mb-2">Ingiza mahali ulipo</small>
                                    <input type="text" class="form-control" name="mahali" id="" value="{{old('mahali')}}"
                                        aria-describedby="helpId" placeholder="Ingiza Mahali ulipo...">
                                    <small class="text-danger">
                                        @error('mahali')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-12 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Ingiza Namba ya simu</small>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="" aria-describedby="helpId"
                                        placeholder="Namba ya simu 07...">
                                    <small class="text-danger">
                                        @error('phone')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>


                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <img src="{{ asset('img/tigopesa.png') }}" class="rounded" width="35px"
                                        height="35px" alt="">
                                    <small class="text-muted mb-2"> <input type="radio" style="cursor: pointer"
                                            name="payment" value="Tigo Pesa">
                                        Tigo Pesa</small>

                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <img src="{{ asset('img/mpesa.png') }}" class="rounded" width="35px" height="35px"
                                        alt="">
                                    <small class="text-muted mb-2"> <input type="radio" style="cursor: pointer"
                                            name="payment" value="Airtel Money">
                                        M-Pesa</small>

                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <img src="{{ asset('img/tpesa.png') }}" class="rounded" width="35px" height="35px"
                                        alt="">
                                    <small class="text-muted mb-2"> <input type="radio" style="cursor: pointer"
                                            name="payment" value="Halo Pesa">
                                        Halo Pesa</small>

                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <img src="{{ asset('img/tpesa.png') }}" class="rounded" width="35px" height="35px"
                                        alt="">
                                    <small class="text-muted mb-2"> <input type="radio" style="cursor: pointer"
                                            name="payment" value="T-Pesa">
                                        T-Pesa</small>
                                </div>
                            </div>
                            <hr class="mx-3">
                            <div class="col-md-12 d-flex justify-content-between">
                                <h6 class="text-muted">Computer Brand: </h6>
                                <span class="fw-bold">{{ $cart_data->computer->brand."
                                    ".$cart_data->computer->generation." ".$cart_data->computer->processor}}</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between">
                                <h6 class="text-muted">Total Costs: </h6>
                                <span>Tsh <span
                                        class="fw-bold text-danger">{{number_format($cart_data->computer->price)}}</span>
                                    /=</span>
                            </div>

                            <div class="col-md-12 mt-2">
                                <button type="submit"
                                    class=" btn btn-success w-100 text-uppercase  shadow-sm">Lipia</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</section>
@endsection