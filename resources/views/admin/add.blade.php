@extends('layouts.app')

@section('pages')
<section class="inner-page mt-5">
    <div class="container">
        <div class="row feature-icons" data-aos="fade-up">
            @if (session()->has('error'))
            <div class="alert alert-danger fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
            </div>
            @endif
            <div class="row">

                <div class="col-xl-4 text-center d-none d-md-block" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('img/lap.jpg') }}" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <form action="/add_computer" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row  gy-4">
                            <span class="text-tonics">Ongeza Computer hapa!</span>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Aina ya Computer</small>
                                    <select class="form-control" name="category" id="">
                                        <option value="">chagua Aina...</option>
                                        <option value="laptop">Laptop</option>
                                        <option value="Desktop">Desktop</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('category')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Uwezo wa RAM</small>
                                    <select class="form-control" name="ram" id="">
                                        <option value="">chagua RAM...</option>
                                        <option value="2GB">2Gb</option>
                                        <option value="4GB">4GB</option>
                                        <option value="8GB">8GB</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('ram')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Uwezo wa HDD</small>
                                    <select class="form-control" name="hdd" id="">
                                        <option value="">chagua HDD...</option>
                                        <option value="250GB">250GB</option>
                                        <option value="500GB">500GB</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('hdd')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Aina ya Brand</small>
                                    <select class="form-control" name="brand" id="">
                                        <option value="">chagua brand...</option>
                                        <option value="Hp">Hp</option>
                                        <option value="Dell">Dell</option>
                                        <option value="Lenovo">Lenovo</option>
                                        <option value="Apple">Apple</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('brand')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Aina Processor</small>
                                    <select class="form-control" name="processor" id="">
                                        <option value="">chagua Processor...</option>
                                        <option value="Dual">Dual</option>
                                        <option value="Core i3 Intel">Core i3 intel</option>
                                        <option value="core i5 AMD">Core i5 AMD</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('processor')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Generation</small>
                                    <select class="form-control" name="generation" id="">
                                        <option value="">chagua generation...</option>
                                        <option value="G1">Generation 1 (G1)</option>
                                        <option value="G2">Generation 2 (G2)</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('generation')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Hali ya Computer</small>
                                    <select class="form-control" name="hali" id="">
                                        <option value="">chagua hali...</option>
                                        <option value="Mpya">Mpya</option>
                                        <option value="used">Used</option>
                                        <option value="Refubrished">Refubrished</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('hali')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 " data-aos="fade-up">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Picha ya Computer</small>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="picha" id="" placeholder=""
                                            aria-describedby="fileHelpId">
                                        <small class="text-danger">
                                            @error('picha')
                                            {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <small class="text-muted mb-2">Bei ya Computer</small>
                                    <input type="number" class="form-control" name="price" id=""
                                        aria-describedby="helpId" placeholder="ingiza Bei hapa...eg.200000">
                                    <small class="text-danger">
                                        @error('price')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <button type="submit"
                                    class=" btn btn-outline-secondary w-100 text-uppercase  shadow-sm">Ongeza</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection