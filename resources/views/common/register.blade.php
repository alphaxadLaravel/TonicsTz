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
                                @if (Session::has('none'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                  kuna mtumiaji ana data kama hizi!
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                              @endif
                                <h3 class="text-tonics">Tonics Tz</h3>
                                <p class="text-muted mb-4">Tengeneza Account mpya!</p>
                                <form action="/register_here" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input name="username" type="text" placeholder="Username" 
                                            autofocus="" class="form-control ">
                                            <small class="text-danger">
                                                @error('username')
                                                    {{$message}}
                                                @enderror
                                            </small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input name="phone" type="number" placeholder="Phone 07...." 
                                            autofocus="" class="form-control ">
                                            <small class="text-danger">
                                                @error('phone')
                                                    {{$message}}
                                                @enderror
                                            </small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input name="password" type="password" placeholder="Password" 
                                            class="form-control ">
                                            <small class="text-danger">
                                                @error('password')
                                                    {{$message}}
                                                @enderror
                                            </small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input name="password_confirmation" type="password" placeholder="Confirm Password" 
                                            class="form-control ">
                                            <small class="text-danger">
                                                @error('password_confirmation')
                                                    {{$message}}
                                                @enderror
                                            </small>
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
