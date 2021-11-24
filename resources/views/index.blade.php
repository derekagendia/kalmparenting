@extends('layout.app')
@section('content')

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6  pe-3" data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine"
                 data-aos-duration="2000">
                <h3 class="display-3 mb-5" style="padding-top:13rem;">
                    {{ __('Raising responsible kids while pursuing a career is possible!') }}
                </h3>
                <p class="lead fw-bolder">Give our platform a try, and enter a world of parental knowledge that will
                    turn you into an amazing parent</p>
                <p class="mt-5"><a href="#" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                   href="#">
                        <button class="btn btn-danger">Join our community</button>
                    </a> <a href="#">
                        <button class="btn btn-outline-danger">Learn more</button>
                    </a></p>
            </div>
            <div class="col-md-6" data-aos="flip-right" data-aos-duration="2000">
                <img src="{{ asset('img/kid.png') }}" class="img-fluid w-100" alt="kid">
            </div>
        </div>
    </div>
    </section>


    <!-- what is kalm parenting -->
    <section class="pt-5 pt-more kp-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1 class="text-white display-4 mb-3" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="1000">What is Kalm parenting</h1>
                    <p class="text-white" data-aos="flip-right"
                       data-aos-easing="ease-out-cubic"
                       data-aos-duration="2000">
                        Kalm parenting is a platform made for women who want to raise their kids to become responsible
                        individuals in the society without necessarily sacrificing their own dreams and aspirations.
                    </p>
                    <p data-aos="zoom-in" data-aos-duration="1000" ><a href="#" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">
                            <button class="btn btn-white">Join our community</button>
                        </a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- what is kalm parenting -->
    <section class="pt-5 pt-more">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4 text-dark mb-5">Is this familiar?</h1>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0">
                            <button class="btn btn-danger btn-circle"><i class="fe fe-check"></i></button>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            You are scared of having more children because of the impact it will have on your career
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0">
                            <button class="btn btn-danger btn-circle"><i class="fe fe-check"></i></button>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            You feel like you have to put a pause on your career or dreams in order to raise your child
                            right
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0">
                            <button class="btn btn-danger btn-circle"><i class="fe fe-check"></i></button>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            You are trying to figure out how to rasie your child the right way
                        </div>
                    </div>

                    <p class="lead text-bold mt-5">
                        If that is the case, this platform is ment for you. Join our community, made up of hundreds of
                        mothers like you aspiring to raise great kids and have a fulfilling life in the procees
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="./img/mom.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pt-more" style="background-color:#F2F7F9;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="display-3 text-center mb-5">Recent Blogs</h1>
                </div>
            </div>
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-md-4">
                        <div class="card card-sm rounded-top-start rounded-bottom-end lift">
                            <!-- Image  -->
                            <img class="card-img rounded-top-start" src="{{ asset(Voyager::image($post->image)) }}"
                                 alt="...">
                            <!-- SHAPE -->
                            <div class="position-relative">
                                <div class="shape shape-fluid-x shape-top text-white">
                                    <div class="shape-img pb-4">
                                        <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                            <path d="M0 25h25L75 0h25v50H0z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="card-body">

                                <!-- Heading -->
                                <div class="d-flex align-items-center mb-3">
                                    <h3>{{ $post->title }}</h3>
                                </div>

                                <!-- Text -->
                                <small>
                                    {{ $post->excerpt }}
                                </small>
                                <p class="mt-3"><a href="{{ route('blog.detail',$post->slug) }}">
                                        <button class="btn btn-danger btn-sm">Details</button>
                                    </a></p>

                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-lg-4 col-md-6">
                        <div class="item item-thumbnail">
                            <div class="item-info">
                                <p class="item-desc"> {{ __('Not data Post') }}</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <p class="text-center"><a href="#">
                            <button class="btn btn-link">All blog articles</button>
                        </a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials -->
    <section class="pt-5 pt-more pb-3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="display-3 text-center mb-5">Testimonials</h1>
                    <p class="text-center fw-bold text-danger lead">What our community members are saying</p>
                </div>
            </div>
            <!-- Testimonials -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12 col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <img src="./img/cardimage.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-center mt-5">The calm parenting platform has been a game changer
                                            for me. being able to take care of my kids while pursuing my dreams is
                                            really a dream come true. I highly recommend this platform for any mom out
                                            there</p>
                                        <p class="text-sm text-muted text-center fw-bold">- Jane Doe (Lawyer)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <img src="./img/cardimage.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-center mt-5">The calm parenting platform has been a game changer
                                            for me. being able to take care of my kids while pursuing my dreams is
                                            really a dream come true. I highly recommend this platform for any mom out
                                            there</p>
                                        <p class="text-sm text-muted text-center fw-bold">- Jane Doe (Lawyer)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <img src="./img/cardimage.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-center mt-5">The calm parenting platform has been a game changer
                                            for me. being able to take care of my kids while pursuing my dreams is
                                            really a dream come true. I highly recommend this platform for any mom out
                                            there</p>
                                        <p class="text-sm text-muted text-center fw-bold">- Jane Doe (Lawyer)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Testimonials end -->

        </div>
    </section>
@endsection
