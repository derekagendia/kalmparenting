@extends('layout.app')
@section('content')

    <section class="bg-dark pt-5 mt-3">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5 order-md-1 position-relative" style="z-index: 1;">

                    <!-- Image -->
                    <img class="img-fluid mw-md-125 mb-4 mb-md-0" src="./img/cardimage.jpg" alt="...">

                </div>
                <div class="col-md-6 order-md-0 pt-6 pt-md-10 pb-12 pb-md-13 text-center text-md-start">
                    <!-- Heading -->
                    <h1 class="display-3 text-white mb-4">
                        Awsome article title here
                    </h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item text-white fw-bold "><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-bold "><a href="blog.html">Blogs</a></li>
                            <li class="breadcrumb-item text-white fw-bold active" aria-current="page">Articles</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    <!-- article -->
    <section class="mt-5 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><img src="./img/cardimage.jpg" class="img-fluid w-100"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end article -->

    @endsection
