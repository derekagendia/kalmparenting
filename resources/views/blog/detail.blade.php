@extends('layout.app')
@section('content')

    <section class="bg-dark pt-5 mt-3">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5 order-md-1 position-relative" style="z-index: 1;">

                    <!-- Image -->
                    <img class="img-fluid mw-md-125 mb-4 mb-md-0" src="{{ Voyager::image($post->image) }}" alt="...">

                </div>
                <div class="col-md-6 order-md-0 pt-6 pt-md-10 pb-12 pb-md-13 text-center text-md-start">
                    <!-- Heading -->
                    <h1 class="display-3 text-white mb-4">
                        {{ $post->title }}
                    </h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item text-white fw-bold "><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white fw-bold "><a href="{{ route('blog') }}">Blogs</a></li>
                            <li class="breadcrumb-item text-white fw-bold active" aria-current="page">{{ $post->title }}</li>
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
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </section>
    <!-- end article -->

    @endsection
