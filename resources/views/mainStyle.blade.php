<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('css/HomePage.css', true) }}" rel="stylesheet">

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

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/jquery.js', true)}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js', true)}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/jquery.easing.js', true)}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/HomePageJscript.js', true)}}"></script>
    <script src="{{asset('js/javaScriptT.js', true)}}"></script>

    {{--    the script I go from w3schools.com--}}
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("mainNav").style.padding = "30px 10px";
                document.getElementById("mainNav").style.backgroundColor = "#212529";
                document.getElementById("logo").style.height = "60px";
                document.getElementById("logo").style.width = "50px";
            } else {
                document.getElementById("mainNav").style.padding = "80px 10px";
                document.getElementById("mainNav").style.backgroundColor = "";
                document.getElementById("logo").style.height = "140px";
                document.getElementById("logo").style.width = "130px";
            }
        }
    </script>


    <style>
        .fab {
            margin: 15px;
        }
    </style>

    @yield('head')

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" dir="ltr">
    <div class="container ">
        <a href="{{route('home')}}" class="navbar-brand"><img class="navbar-brand js-scroll-trigger  img-fluid  "
                                                              height="130px" width="130px" alt="img-responsive"
                                                              id="logo"
                                                              src="{{asset('homeImages/logo-spp-color.png', true)}}"></a>
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
                @if(route::has('GPA'))
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('GPA')}}">إحسب معدلك</a>
                    </li>
            @endif
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
            @yield('scroll')

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


</body>
</html>
