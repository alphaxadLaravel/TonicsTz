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
                        <form action="/add_computer" method="POST" enctype="multipart/form-data">
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
