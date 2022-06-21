@extends('layouts.forms')
@section('outs')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image" style="background-image: url('{{ asset('img/out.jpg') }}')"></div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="text-tonics">Tonics Tz</h3>
                                <p class="text-muted mb-4">Tengeneza Account mpya!</p>
                                <form>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" placeholder="Username" required=""
                                            autofocus="" class="form-control ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="number" placeholder="Phone +255..." required=""
                                            autofocus="" class="form-control ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" placeholder="Password" required=""
                                            class="form-control ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" placeholder="Confirm Password" required=""
                                            class="form-control ">
                                    </div>
                                    
                                    <button type="submit"
                                        class=" btn btn-primary w-100 text-uppercase mb-2  shadow-sm">Jisajili</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Tayari una Account ? <a href="/login"
                                            class="font-italic text-muted">
                                            <u>Ingia hapa!</u></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
@endsection
