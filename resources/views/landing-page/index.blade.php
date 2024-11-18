@extends('layouts.main')

@section('content')
    <header>
        <div class="cover bg-light">
            <div class="container px-3">
                <div class="row">
                    <div class="col-lg-6 p-2"><img class="img-fluid" src="/landing-page/images/illustrations/hello3.svg"
                            alt="hello" /></div>
                    <div class="col-lg-6">
                        <div class="mt-5">
                            <p class="lead text-uppercase mb-1">Hello!</p>
                            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m {{ $profile->name }}
                            </h1>
                            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">{{ $profile->job }}</p>
                            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                                <nav role="navigation">
                                    <ul class="nav justify-content-left">
                                        {{-- <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                                title="Twitter"><i class="fab fa-twitter"></i><span
                                                    class="menu-title sr-only">Twitter</span></a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="https://www.facebook.com/templateflip" title="Facebook"><i
                                                    class="fab fa-facebook"></i><span
                                                    class="menu-title sr-only">Facebook</span></a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="https://www.instagram.com/templateflip" title="Instagram"><i
                                                    class="fab fa-instagram"></i><span
                                                    class="menu-title sr-only">Instagram</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/"
                                                title="LinkedIn"><i class="fab fa-linkedin"></i><span
                                                    class="menu-title sr-only">LinkedIn</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="https://www.behance.net/templateflip"
                                                title="Behance"><i class="fab fa-behance"></i><span
                                                    class="menu-title sr-only">Behance</span></a></li> --}}
                                        @foreach ($social_media as $item)
                                            <li class="nav-item"><a class="nav-link" href="{{ $item->url }}"
                                                    title="{{ $item->name }}"><i
                                                        class="fab fa-{{ $item->name }}"></i><span
                                                        class="menu-title sr-only">{{ $item->name }}</span></a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a
                                    class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i
                                        class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bg"></div>
    </header>
    <div class="section pt-4 px-3 px-lg-4" id="about">
        <div class="container-narrow">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h4 my-2">Hello! I’m {{ $profile->name }}.</h2>
                    <p>{{ $profile->description }}</p>
                    <div class="row mt-3">
                        <div class="col-sm-2">
                            <div class="pb-1">Birthdate:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="pb-1 fw-bolder">{{ $profile->birthdate }}</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="pb-1">Email:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="pb-1 fw-bolder">{{ $profile->email }}</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="pb-1">Phone:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="pb-1 fw-bolder">{{ $profile->phone }}</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="pb-1">Address:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="pb-1 fw-bolder">{{ $profile->address }}</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="pb-1">Status:</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="pb-1 fw-bolder">Available</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
                        class="avatar img-fluid mt-2" src="/images/avatar/avatar.jpg" width="400" height="400"
                        alt="{{ $profile->name }}" /></div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="services">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">My Expertise</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can
                    quickly maximize timely deliverables for real-time schemas.</p>
            </div>
            <div class="row py-3">
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2"
                        src="/landing-page/images/services/web-design.svg" width="96" height="96" alt="web design" />
                    <div class="h5">Web Design</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2"
                        src="/landing-page/images/services/graphic-design.svg" width="96" height="96"
                        alt="graphic design" />
                    <div class="h5">Graphic Design</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2"
                        src="/landing-page/images/services/ui-ux.svg" width="96" height="96" alt="ui-ux" />
                    <div class="h5">UI/UX</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2"
                        src="/landing-page/images/services/app-development.svg" width="96" height="96"
                        alt="app development" />
                    <div class="h5">App Development</div>
                </div>
            </div>
        </div>
    </div>

    <div class="section px-2 px-lg-4 pt-5" id="gallery">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Gallery </h2>
            </div>
            <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="grid-sizer"></div>
                @for ($i = 1; $i <= 8; $i++)
                <div class="grid-item"><a style="cursor: pointer">
                    <figure class="gallery-item"><img src="/images/gallery/{{ $i }}.jpg"
                            data-bp="/images/gallery/{{ $i }}.jpg" />
                        <figcaption></figcaption>
                    </figure>
                </a></div>
                @endfor
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="/gallery">View all</a>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="portfolio">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Portfolio</h2>
            </div>
            <div class="row">
                <div class="col">
                    @php
                        $flip = false;
                    @endphp
                    @foreach ($portfolios as $portfolio)
                        <div class="row">
                            <div class="col-md-5 order-{{ $flip == true ? '1' : '0' }}">
                                <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                                    <div class="card-body d-flex p-2">
                                        <img src="/images/portfolio/{{ $loop->iteration }}.jpg" style="object-fit: cover; width: 100%" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
                                    <div class="card-header px-3 py-2">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3 class="h5 mb-1">{{ $portfolio->title }}</h3>
                                                <div class="text-muted text-small"> {{ $portfolio->client }}
                                                    <small>({{ $portfolio->duration }})</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p>{{ $portfolio->description }}</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ $portfolio->url }}" class="btn btn-primary">See Project >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $flip = !$flip;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Contact Me</h2>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-light my-2 p-3 pt-2">
                        <form>
                            <div class="form-group my-2">
                                <label for="name" class="form-label fw-bolder">Name</label>
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="email" class="form-label fw-bolder">Email</label>
                                <input class="form-control" type="email" id="email" name="_replyto" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="message" class="form-label fw-bolder">Message</label>
                                <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="mt-3 px-1">
                        <div class="h5">Let’s talk how I can help you!</div>
                        <p>If you like my work and want to avail my services then drop me a message using the contact form.
                        </p>
                        <p>Or get in touch using my email or my contact number.</p>
                        <p>See you!</p>
                    </div>
                    <div class="mt-53 px-1">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="pb-1">Email:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">{{ $profile->email }}</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">Phone:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">{{ $profile->phone }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
