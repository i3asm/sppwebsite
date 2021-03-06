@extends('mainStyle')

@section('head')
    <style>
        body {
            overflow-x: hidden;
            font-family: "Tajawal", sans-serif;
            background: whitesmoke;
        }

        #joinIm {
            background-color: #f6a270;
        }

        .text-primary1 {
            color: #95b559;
            /*SPP colors 1590c9 (Blue)  95b559(Green)  cf5c64(Red) f6a270(Orange)*/
        }

        .cards-borders {
            border-top: #1590c9;
            border-bottom: #95b559;
            border-left: #f6a270;
            border-right: #cf5c64;
        }

        .card-font {
            font-family: 'Tajawal', sans-serif;

        }

        .text-primary2 {
            color: #cf5c64;
        }

        .text-primary3 {
            color: #1590c9;
        }

        #joinUs {
            font-size: 2rem;
        }

        p {
            font-family: "Tajawal", sans-serif;
            line-height: 1.75;
        }

        a {
            color: #fed136;
        }

        a:hover {
            color: #fec503;
        }

        .text-primary {
            color: #fed136 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6{
            font-weight: 700;
            font-family: "Tajawal", sans-serif;
        }

        .page-section {
            padding: 100px 0;
        }

        .page-section h2.section-heading {
            font-size: 40px;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .page-section h3.section-subheading {
            font-size: 16px;
            font-weight: 400;
            font-style: italic;
            margin-bottom: 75px;
            text-transform: none;
            font-family: "Tajawal", sans-serif;
        }

        @media (min-width: 768px) {
            section {
                padding: 150px 0;
            }
        }

        ::-moz-selection {
            background: #fed136;
            text-shadow: none;
        }

        ::selection {
            background: #fed136;
            text-shadow: none;
        }

        img::-moz-selection {
            background: transparent;
        }

        img::selection {
            background: transparent;
        }

        img::-moz-selection {
            background: transparent;
        }

        .btn {
            font-family: "Tajawal", sans-serif;
            font-weight: 700;
        }

        .btn-xl {
            font-size: 18px;
            padding: 20px 40px;
        }

        .btn-primary {
            background-color: #1590c9;
            border-color: #1590c9;
        }

        .btn-primary:active,
        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #cf5c64 !important;
            border-color: #cf5c64 !important;
            color: white;
        }

        .btn-primary:active,
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
        }

        #mainNav {
            background-color: #212529;
        }

        #mainNav .navbar-toggler {
            font-size: 12px;
            right: 0;
            padding: 13px;
            text-transform: uppercase;
            color: white;
            border: 0;
            /*To change menu*/
            background-color: black;
            font-family: "Tajawal", sans-serif;
        }

        #mainNav .navbar-brand {
            color: #fed136;
            font-family: "Tajawal", sans-serif;
        }

        #mainNav .navbar-brand.active,
        #mainNav .navbar-brand:active,
        #mainNav .navbar-brand:focus,
        #mainNav .navbar-brand:hover {
            color: #fec503;
        }

        #mainNav .navbar-nav .nav-item .nav-link {
            font-size: 90%;
            font-weight: 400;
            padding: 0.75em 0;
            letter-spacing: 1px;
            color: white;
            font-family: "Tajawal", sans-serif;
        }

        #mainNav .navbar-nav .nav-item .nav-link.active,
        #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: #cf5c64;
            /* To change nav btn colors*/
        }

        @media (min-width: 992px) {
            .fixed-top {
                height: 60px;
            }

            #mainNav {
                position: fixed;
                padding-top: 75px;
                padding-bottom: 25px;
                transition: padding-top 0.5s, padding-bottom 0.5s;
                border: none;
                background-color: transparent;
            }

            #mainNav .navbar-brand {
                font-size: 1.5em;
                transition: all 0.5s;
            }

            #mainNav .navbar-nav .nav-item .nav-link {
                font-size: 1rem;
                padding: 1.1em 1em !important;
            }

            #mainNav.navbar-shrink {
                padding-top: 0;
                padding-bottom: 0;
                background-color: #212529;
            }

            #mainNav.navbar-shrink .navbar-brand {
                font-size: 1.25em;
                width: 50px;
            }
        }

        /* */
        header.masthead {
            text-align: center;
            color: white;
            background-image: url("https://i.ibb.co/n1MqWff/King-saud-university-entrance.png");
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-size: cover;
        }

        header.masthead .intro-text {
            padding-top: 150px;
            padding-bottom: 100px;
        }

        header.masthead .intro-text .intro-lead-in {
            font-size: 22px;
            font-style: italic;
            line-height: 22px;
            margin-bottom: 25px;
            font-family: "Tajawal", sans-serif;
        }

        header.masthead .intro-text .intro-heading {
            font-size: 50px;
            font-weight: 700;
            line-height: 50px;
            margin-bottom: 25px;
            font-family: "Tajawal", sans-serif;
        }

        @media (min-width: 768px) {
            header.masthead .intro-text {
                padding-top: 300px;
                padding-bottom: 200px;
            }

            header.masthead .intro-text .intro-lead-in {
                font-size: 40px;
                font-style: italic;
                line-height: 40px;
                margin-bottom: 25px;
                font-family: "Tajawal", sans-serif;
            }

            header.masthead .intro-text .intro-heading {
                font-size: 75px;
                font-weight: 700;
                line-height: 75px;
                margin-bottom: 50px;
                font-family: "Tajawal", sans-serif;
            }
        }

        .footer {
            padding: 25px 0;
            text-align: center;
        }

        .footer span.copyright {
            font-size: 90%;
            line-height: 40px;
            text-transform: none;
            font-family: "Tajawal", sans-serif;
        }

        .footer ul.quicklinks {
            font-size: 90%;
            line-height: 40px;
            margin-bottom: 0;
            text-transform: none;
            font-family: "Tajawal", sans-serif;
        }

        ul.social-buttons {
            margin-bottom: 0;
        }

        ul.social-buttons li a {
            font-size: 20px;
            line-height: 50px;
            display: block;
            width: 50px;
            height: 50px;
            transition: all 0.3s;
            color: white;
            border-radius: 100%;
            outline: none;
            background-color: #212529;
        }

        ul.social-buttons li a:active,
        ul.social-buttons li a:focus,
        ul.social-buttons li a:hover {
            background-color: #1590c9;
        }

        @media (max-width: 991.98px) {
            .navbar {
                padding: 0px 1rem !important;
            }

            #logo {
                width: 45px;
            }

            #logo.navbar-shrink {
                padding-top: 0;
                padding-bottom: 0;

                background-color: #212529;
            }
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #305891;
            border-color: #305893;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #305893;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
          
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
        }

        .backside .card a {
            font-size: 18px;
            color: #305893 !important;
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: #305893 !important;
        }

        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <link rel="stylesheet" type="text/css" href="EssentialCSS.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>القادة السابقين</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Tajawal&display=swap" rel="stylesheet">

    <!-- Custom scripts for this template -->
@endsection

@section('content')

    <section id="team" class="pb-5 container">
        <div class=" card-font text-center">
            <!-- <h5 class="section-title h1">القادة السابقين</h5> -->

            @foreach($persons->chunk(3) as $chunk)
                <div class="row">
                @foreach($chunk as $person)
                    <!-- each card html -->
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-xs-center">
                                                <p>
                                                    <img src="{{ asset('archives/'.$person->avatar, true) }}" style="max-width: 200px; max-height: 200px"
                                                         alt="صورة {{$person->name}}" title="صورة {{$person->name}}">
                                                </p>

                                                <h4 class="card-title">{{$person->name}}</h4>
                                                <p class="card-text">{{$person->position}}</p>

                                            <!-- <a href="#" class="btn btn-primary btn-sm">المزيد</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-xs-center mt-4">
                                                <h4 class="card-title">{{$person->name}}</h4>

                                                <h4 class="card-text">{{$person->phone}}</h4>
                                                <p class="card-text">{{$person->email}}</p>
                                                <ul class="list-inline">
                                                    <button onclick="window.location.href = '{{$person->twitter}}'"
                                                            class="fab fa-lg fa-twitter tw-ic mr-3 border-0 social-buttons"></button>
                                                    <button onclick="window.location.href = '{{$person->linkedin}}'"
                                                            class="fab fa-lg fa-linkedin mr-3 border-0 social-buttons"></button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    @for($i = 0; $i < $pages; $i++)
                        <li class="page-item"><a class="page-link" href="{{$i}}">{{$i+1}}</a></li>
                    @endfor
                </ul>
            </nav>

        </div>

    </section>

@endsection
