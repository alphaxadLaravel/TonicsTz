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
                                @if (session()->has('success'))
                                <div class="alert alert-success fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                </div>
                                @endif
                                @if (session()->has('error'))
                                <div class="alert alert-danger fade show" role="alert">
                                    <strong>Error!</strong> {{ session('error') }}
                                </div>
                                @endif
                                <h3 class="text-tonics"><a href="/" class="text-tonics">Tonics Tz</a></h3>
                                <p class="text-muted mb-4">Ingia Katika Account yako!</p>
                                <form action="/login_here" method="POST">
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
                                        <input name="password" type="password" placeholder="Password" 
                                            class="form-control ">
                                            <small class="text-danger">
                                                @error('password')
                                                    {{$message}}
                                                @enderror
                                            </small>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember Me!</label>
                                    </div>
                                    <button type="submit"
                                        class=" btn btn-primary w-100 text-uppercase mb-2  shadow-sm">Ingia</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Je Huna Account ? <a href="/register"
                                            class="font-italic text-muted">
                                            <u>Jisajili hapa!</u></a></p> 
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
