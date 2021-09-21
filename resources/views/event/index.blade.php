@extends('layout.app')

@section('content')

    <div class="pb-5 bg-dark" style="padding-top:8rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-3 text-white">Events</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item text-white fw-bold "><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-bold active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="#">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="{{ route('event.detail') }}">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="#">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="#">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="#">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-sm rounded-top-start rounded-bottom-end lift mt-3">
                    <!-- Image  -->
                    <img class="card-img rounded-top-start" src="./img/cardimage.jpg" alt="...">
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
                            <h3>Event title</h3>
                        </div>
                        <!-- Text -->
                        <small>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non.
                        </small>
                        <p class="mt-3"><a href="#">
                                <button class="btn btn-danger btn-sm">Details</button>
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
