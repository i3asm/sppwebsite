<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('css/HomePage.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/HomePageJscript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/javaScriptT.js') }}"></script>

    <!-----------HTML START HERE !!------------->
    <title>{{$title ?? "الشراكة الطلابية"}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700&display=swap" rel="stylesheet">

    @yield('head')

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" dir="ltr">
    <div class="container ">
        <a href="{{route('home')}}" class="navbar-brand"><img class="navbar-brand js-scroll-trigger  img-fluid  "
                                                       height="130px" width="130ox" alt="img-responsive" id="logo"
                                                       src="https://i.ibb.co/TqTGGsw/logo-spp-color.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('archiveMain')}}">رابطة القادة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#">إحسب معدلك</a>
                </li>
                <!--Who us? navbar btn-->
                <!-- <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">من نحن؟</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">{{$title ?? "الشراكة الطلابية"}}</div>
            <!-- <div class="intro-lead-in"><br></div> -->
            <a class="btn btn-primary btn-lg text-uppercase js-scroll-trigger" href="#services"> تعرف علينا</a>

        </div>
    </div>
</header>

@yield('content')

<!-- Footer -->
<footer class="footer" dir="ltr">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <span class="copyright">جميع الحقوق محفوظة &copy; الشراكة الطلابية بجامعة الملك سعود</span>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for this template -->
<script src="../../public/js/HomePageJscript.js"></script>
<script src="../../public/js/javaScriptT.js"></script>

</body>
</html>
