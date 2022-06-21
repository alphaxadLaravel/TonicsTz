@extends('layouts.outside')

@section('pages')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Kuhusu Tonics TZ?</h3>
                        <h2>Tonics Tz wasambazaji..wauzaji na Wasafirishaji mahili wa Computer na vifaa vyake Tanzania Nzima
                            kwa bei nafuu!</h2>
                        <h2></h2>

                        <p>
                            Tonics Tz tupo kwaajili yako, tunakusaidia kupata Computer kwa haraka... Tafuta Computer ya
                            vigezo upendavyo tukuletee mahala ulipo kwa bei rahisi kuliko Madukani!
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="/tafuta_out"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Tafuta Computer</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/apple.jpg') }}" class="img-fluid rounded" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="huduma" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Huduma Zetu</h2>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="{{ asset('img/values-2.png') }}" class="img-fluid" alt="">
                        <h3>Tafuta Computer yako</h3>
                        <p>Pata uwanja mpana wa kutafuta bidhaa ya Computer upendayo.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="{{ asset('img/values-1.png') }}" class="img-fluid" alt="">
                        <h3>Lipia Computer yako</h3>
                        <p>Fanya malipo kwa computer uliotafuta na kuipenda popote pale ulipo!.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="{{ asset('img/delivery.png') }}" class="img-fluid mb-4" alt="">
                        <h3>Tunakuletea ulipo</h3>
                        <p>Tunatoa huduma ya usafirishaji kwa watu walioko mikoani.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="feature-icons">
                {{-- <h2>Kwanini Tonics Tz?</h2>
            <p>Kwanini Tonics Tz?</p> --}}
                <h3>Kwanini Tonics Tz ?</h3>

            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="{{ asset('img/gamming.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Computer zetu imara</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Warranty ya miezi 6</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Tunakuletea Ulipo</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Computer zote mpya</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Gharama zetu ndogo</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Unajichagulia </h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3><span class="d-none d-md-inline">Zifahamu</span> Sifa za Computer nzuri <span
                        class="d-none d-md-inline">na Sehemu zake</span></h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/lap.jpg') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Speed</h4>
                                    <p>Computer nzuri hua iko speed katika utendaji kazi wake!</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Memory</h4>
                                    <p>Computer nzuri huwa na memory kubwa ya kutunza vitu</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Brand</h4>
                                    <p>Computer nzuri hutegemeana na brand inayoongoza Duniani</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Quality</h4>
                                    <p>Computer nzuri kioo chake huwa na Quality nzuri</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                    <h4>Charge</h4>
                                    <p>Computer nzuri hukaa na chaji masaa zaidi ya matatu</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Wepesi</h4>

                                    <p>Computer nzuri hua ni nyepesi na sio nzito katika kubeba!</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- End Feature Icons -->

        </div>

    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Team Yetu</h2>
                {{-- <p>Wafanyakazi wa Tonics TZ</p> --}}
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team-22.jpg') }}"  class="img-fluid" >
                        </div>
                        <div class="member-info">
                            <h4>David Bugingo</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Mtey Mtey</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Shafii David</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Felister Jenson</h4>
                            <span>Muhasibu</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="brand" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Brand Zilizopo</h2>
                {{-- <p>Brand <span class="d-none d-md-inline">za Computer</span> zilizopo</p> --}}
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('img/logo-1.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-2.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-3.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-4.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-5.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-6.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-7.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-8.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-9.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/logo-10.png') }}" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section><!-- End Clients Section -->


    {{-- Mawasiliano hapa --}}
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Wasiliana Nasi</h2>
                {{-- <p>Wasiliana Nasi</p> --}}
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Kigamboni Ferry,<br>Dar-es-Salaam, Tz 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Tupigie</h3>
                                <p>+255 733 440 015<br>+255 743 196 599</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Tuma Ujumbe</h3>
                                <p>tonicstz@gmail.com<br>programmertz@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Masaa Kazi</h3>
                                <p>Jumatatu - Ijumaa<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Tuma Ujumbe</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
