<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="img/liwaroyah.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('menu.navigator')

        <!-- Page Content-->
        <div class="container-fluid p-0">

            <!-- About-->
            <section class="resume-section" id="about">
                @include('pages.about')
            </section>
            <hr class="m-0" />

            <!-- Skills-->
            <section class="resume-section" id="skills">                
                @include('pages.skils')
            </section>
            <hr class="m-0" />

            <!-- Portofolio -->
            <section class="resume-section" id="portofolio">
                @include('pages.portofolio')
            </section>
            <hr class="m-0" />

            <!-- Experience-->
            <section class="resume-section" id="experience">
                @include('pages.experience')
            </section>
            <hr class="m-0" />

            <!-- Education-->
            <section class="resume-section" id="education">
                @include('pages.education')
            </section>            
            <hr class="m-0" />

            <!-- Awards-->
            <section class="resume-section" id="awards">
                @include('pages.award')
            </section>

        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
        {{-- <script src="js/scripts.js"></script> --}}
    </body>
</html>