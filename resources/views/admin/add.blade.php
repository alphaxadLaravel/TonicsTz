@extends('layouts.app')

@section('pages')
    <section class="inner-page mt-5">
        <div class="container">
            <div class="row feature-icons" data-aos="fade-up">
                <div class="row">

                    <div class="col-xl-4 text-center d-none d-md-block" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/lap.jpg') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <form action="" method="post">
                            <div class="row  gy-4">
                                <span class="text-tonics">Ongeza Computer hapa!</span>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Aina ya Computer</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua Aina...</option>
                                            <option value="">Laptop</option>
                                            <option value="">Desktop</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Uwezo wa RAM</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua RAM...</option>
                                            <option value="">2Gb</option>
                                            <option value="">4GB</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Uwezo wa HDD</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua HDD...</option>
                                            <option value="">250GB</option>
                                            <option value="">500GB</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Aina ya Brand</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua brand...</option>
                                            <option value="">Hp</option>
                                            <option value="">Dell</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Aina Processor</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua Processor...</option>
                                            <option value="">Dual</option>
                                            <option value="">Core i3 intel</option>
                                            <option value="">Core i5 AMD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Generation</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua generation...</option>
                                            <option value="">Generation 1 (G1)</option>
                                            <option value="">Generation 2 (G2)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Hali ya Computer</small>
                                        <select class="form-control" name="" id="">
                                            <option value="">chagua hali...</option>
                                            <option value="">Mpya</option>
                                            <option value="">Used</option>
                                            <option value="">Refubrished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " data-aos="fade-up">
                                    <div class="form-group">
                                        <small class="text-muted mb-2">Picha ya Computer</small>
                                        <div class="form-group">
                                          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
                                        </div>
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
