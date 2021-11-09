<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon"/>

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{ asset('js/mapbox-gl.css') }}"/>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('css/libs.bundle.css') }}"/>

    <!-- Libs CSS AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>

    <!--
      Theme Sans Serif CSS
      Remove the "disabled" attribute if you want to enable Sans Serif for headings.
    -->
    <link rel="stylesheet" href="{{ asset('css/theme-sans-serif.bundle.css') }}" id="themeSansSerif" disabled/>

    <!--
      Demo JS
      Remove the code below on a production website.
    -->
    <script src="{{ asset('assets/js/demo.bundle.js') }}"></script>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.bundle.css') }}"/>
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">

    <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <style type="text/css">
        .page-header {
        }

        .kp-primary {
            background-color: #FA033E;
        }

        .pt-more {
            padding-top: 5rem !important;
        }
    </style>

    <!-- Title -->
    <title>Kalm parenting</title>
</head>

<body>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Join the Kalm Parenting Community</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('join') }}">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputtext1" class="form-label">First Name</label>
                                <input name="first_name" type="text"
                                       class="form-control @error('first_name') is-invalid @enderror"
                                       id="exampleInputtext1">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputtext1" class="form-label">Last Name</label>
                                <input name="last_name" type="text"
                                       class="form-control @error('last_name') is-invalid @enderror"
                                       id="exampleInputtext1">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="exampleInputtext1" class="form-label">Your whatsapp Number</label>
                                <input name="phone" type="phone"
                                       class="form-control @error('phone') is-invalid @enderror" id="exampleInputtext1">
                            </div>
                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Your message
                                    (optional)</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror"
                                          id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-danger" value="Submit"/>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- navbar -->
<section class="page-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" style="
    height: auto;
    width: 15%;
"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('event') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                           href="#">Contact</a>
                    </li>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    @yield('content')

    <footer class="footer py-8 pt-md-11 bg-dark border-multicolor">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4">

                    <!-- Brand -->
                    <h2 class="font-serif text-white mb-1">
                        Kalm Parenting
                    </h2>
                </div>
                <div class="col-6 col-md">

                    <!-- Heading -->
                    <h6 class="text-uppercase text-white mb-3 mb-md-5">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </h6>

                </div>
                <div class="col-6 col-md">

                    <h6 class="text-uppercase text-white mb-3 mb-md-5">
                        <a href="{{ route('event') }}" class="nav-link">Event</a>
                    </h6>
                </div>
                <div class="col-6 col-md">
                    <h6 class="text-uppercase text-white mb-3 mb-md-5">
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                    </h6>
                </div>

            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Divider -->
                    <hr class="bg-white-10 my-7">

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md">

                    <!-- List -->
                    <ul class="list-inline list-unstyled text-gray-600 small mb-md-0">
                        <li class="list-inline-item">
                            ©
                            <script>document.write(new Date().getFullYear());</script>
                            Kalm Parenting
                        </li>
                        <li class="list-inline-item ms-md-8">
                            <a class="text-reset" href="#!">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="list-inline-item ms-md-8">
                            <a class="text-reset" href="#!">
                                Terms of Service
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-md-auto">

                    <!-- Social -->
                    <ul class="list-inline list-unstyled text-gray-600 mb-0">
                        <li class="list-inline-item">
                            <a class="icon icon-sm text-reset" href="#!">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2.163C15.204 2.163 15.584 2.175 16.85 2.233C20.102 2.381 21.621 3.924 21.769 7.152C21.827 8.417 21.838 8.797 21.838 12.001C21.838 15.206 21.826 15.585 21.769 16.85C21.62 20.075 20.105 21.621 16.85 21.769C15.584 21.827 15.206 21.839 12 21.839C8.796 21.839 8.416 21.827 7.151 21.769C3.891 21.62 2.38 20.07 2.232 16.849C2.174 15.584 2.162 15.205 2.162 12C2.162 8.796 2.175 8.417 2.232 7.151C2.381 3.924 3.896 2.38 7.151 2.232C8.417 2.175 8.796 2.163 12 2.163ZM12 0C8.741 0 8.333 0.014 7.053 0.072C2.695 0.272 0.273 2.69 0.073 7.052C0.014 8.333 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.272 21.306 2.69 23.728 7.052 23.928C8.333 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C21.302 23.728 23.73 21.31 23.927 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.333 23.928 7.053C23.732 2.699 21.311 0.273 16.949 0.073C15.668 0.014 15.259 0 12 0V0ZM12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.163 12 18.163C15.403 18.163 18.162 15.404 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.21 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.21 14.209 16 12 16ZM18.406 4.155C17.61 4.155 16.965 4.8 16.965 5.595C16.965 6.39 17.61 7.035 18.406 7.035C19.201 7.035 19.845 6.39 19.845 5.595C19.845 4.8 19.201 4.155 18.406 4.155Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item ms-1">
                            <a class="icon icon-sm text-reset" href="#!">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.675 0H1.325C0.593 0 0 0.593 0 1.325V22.676C0 23.407 0.593 24 1.325 24H12.82V14.706H9.692V11.084H12.82V8.413C12.82 5.313 14.713 3.625 17.479 3.625C18.804 3.625 19.942 3.724 20.274 3.768V7.008L18.356 7.009C16.852 7.009 16.561 7.724 16.561 8.772V11.085H20.148L19.681 14.707H16.561V24H22.677C23.407 24 24 23.407 24 22.675V1.325C24 0.593 23.407 0 22.675 0V0Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item ms-1">
                            <a class="icon icon-sm text-reset" href="#!">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24 4.55705C23.117 4.94905 22.168 5.21305 21.172 5.33205C22.189 4.72305 22.97 3.75805 23.337 2.60805C22.386 3.17205 21.332 3.58205 20.21 3.80305C19.313 2.84605 18.032 2.24805 16.616 2.24805C13.437 2.24805 11.101 5.21405 11.819 8.29305C7.728 8.08805 4.1 6.12805 1.671 3.14905C0.381 5.36205 1.002 8.25705 3.194 9.72305C2.388 9.69705 1.628 9.47605 0.965 9.10705C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.10605C22.505 6.41105 23.34 5.54405 24 4.55705Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item ms-1">
                            <a class="icon icon-sm text-reset" href="#!">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 0C5.373 0 0 5.372 0 12C0 17.084 3.163 21.426 7.627 23.174C7.522 22.225 7.427 20.769 7.669 19.733C7.887 18.796 9.076 13.768 9.076 13.768C9.076 13.768 8.717 13.049 8.717 11.986C8.717 10.318 9.684 9.072 10.888 9.072C11.911 9.072 12.406 9.841 12.406 10.762C12.406 11.791 11.751 13.33 11.412 14.757C11.129 15.951 12.011 16.926 13.189 16.926C15.322 16.926 16.961 14.677 16.961 11.431C16.961 8.558 14.897 6.549 11.949 6.549C8.535 6.549 6.531 9.11 6.531 11.756C6.531 12.787 6.928 13.894 7.424 14.494C7.522 14.613 7.536 14.718 7.507 14.839L7.174 16.199C7.121 16.419 7 16.466 6.772 16.36C5.273 15.662 4.336 13.471 4.336 11.711C4.336 7.926 7.086 4.449 12.265 4.449C16.428 4.449 19.663 7.416 19.663 11.38C19.663 15.516 17.056 18.844 13.436 18.844C12.22 18.844 11.077 18.213 10.686 17.466L9.938 20.319C9.667 21.362 8.936 22.669 8.446 23.465C9.57 23.812 10.763 24 12 24C18.627 24 24 18.627 24 12C24 5.372 18.627 0 12 0V0Z"
                                          fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='{{ asset('js/mapbox-gl.js') }}'></script>

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendor.bundle.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.bundle.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel();
        });


        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error("{{ $error }}");
        @endforeach
            @endif

            @if(session()->has('message'))
            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success("{{ session('message') }}");
        @endif
    </script>

</body>
</html>

