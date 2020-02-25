@extends('mainStyle')

@section('scroll')
    <a class="btn btn-primary btn-lg text-uppercase js-scroll-trigger" href="#services"> تعرف علينا</a>
@endsection

@section('content')
    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">من نحن؟</h2>
                    @if (isset($homes->where('title', 'media')->first()->body))
                        <h3 class="section-subheading text-muted">{!! nl2br($homes->where('title', 'aboutUs')->first()->body) !!}</h3>
                    @else
                        <h3 class="section-subheading text-muted">برنامج الشراكة الطلابية يهتم باحتضان المبادرات
                            الطلابية وصقل الجوانب المهارية لدى الطلبة بطريقة عمل إبداعية وإحترافية</h3>
                    @endif
                </div>

            </div>
            <div class="row text-center">
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary1"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse "></i>
          </span>
                    <h4 class="service-heading">رؤيتنا</h4>
                    @if (isset($homes->where('title', 'media')->first()->body))
                        <p class="text-muted text-center">{!! nl2br($homes->where('title', 'vision')->first()->body) !!}</p>
                    @else
                        <p class="text-muted text-center">الريادة والتميز بالأنشطة الطلابية</p>
                    @endif
                    <p><br></p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary2"></i>
            <i class="fas fa-envelope-open fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">رسالتنا</h4>
                    @if (isset($homes->where('title', 'media')->first()->body))
                        <p class="text-muted">{!! nl2br($homes->where('title', 'message')->first()->body) !!}</p>
                    @else
                        <p class="text-muted">تمكين الطلبة من اكتشاف ذواتهم وتنمية قدراتهم من خلال بيئة إيجابية محفزة
                            على الإبداع والإبتكار</p>
                    @endif
                    <p><br></p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">

            <i class="fas fa-circle fa-stack-2x text-primary3"></i>
            <i class="fas fa-bullseye fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading"> أهدافنا</h4>
                    @if (isset($homes->where('title', 'media')->first()->body))
                        <p class="text-muted text-justify text-center">{!! nl2br(e($homes->where('title', 'goals')->first()->body))!!}</p>
                    @else
                        <p class="text-muted text-justify text-center">تحفيز وتمكين اطلاق المبادرات الطلابية<br/>
                            طموح الطلبة لوطن حيوي ومزدهر<br/>
                            تطوير مهارات و مواهب الطلبة<br/>
                            تكوين قيادات شابة للمجتمع</p>
                    @endif
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="page-section " id="about">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <h2 class="section-heading text-uppercase">فرق الشراكة الطلابية</h2>
                    <p><br></p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12 justify-content-sm-end">
                    <ul class="timeline ">
                        <li>
                            <div class="timeline-image " id="img1">
                                <img class="rounded-circle img-fluid"
                                     src="{{asset('homeImages/media.jpg', true)}}"
                                     alt="">
                            </div>
                            <div class="timeline-panel ">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading ">الفريق الإعلامي</h4>
                                </div>
                                <div class="timeline-body">
                                    @if (isset($homes->where('title', 'media')->first()->body))
                                        <p class="text-muted">{!! nl2br(e($homes->where('title', 'media')->first()->body))!!}</p>
                                    @else
                                        <p class="text-muted">القيام بالأمور الإعلامية من تنسيق وتوثيق ونشر فعاليات
                                            الشراكة الطلابية وتحقيق المحتوى</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image " id="img2">
                                <img class="rounded-circle img-fluid" src="{{asset('homeImages/PR.png', true)}}"
                                     alt="">
                            </div>
                            <div class="timeline-panel ">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading ">فريق العلاقات العامة</h4>
                                </div>
                                <div class="timeline-body  ">
                                    @if (isset($homes->where('title', 'media')->first()->body))
                                        <p class="text-muted ">{!! nl2br(e($homes->where('title', 'pr')->first()->body))!!}</p>
                                    @else
                                        <p class="text-muted ">تمثيل الشراكة والعمل على تسويقها وجلب الرعايات والتواصل
                                            مع الجهات الراعية</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image" id="img3">
                                <img class="rounded-circle img-fluid" src="{{asset('homeImages/HR.png', true)}}"
                                     alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق الموارد البشرية</h4>
                                </div>
                                <div class="timeline-body">
                                    @if (isset($homes->where('title', 'media')->first()->body))
                                        <p class="text-muted">{!! nl2br(e($homes->where('title', 'hr')->first()->body))!!}</p>
                                    @else
                                        <p class="text-muted">إدارة شؤون أعلى موارد الأرض الإنسان واستقطاب الكفاءات
                                            منهم</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" id="img4">
                                <img class="rounded-circle img-fluid" src="{{asset('homeImages/Team.png', true)}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق التنظيم والدعم</h4>
                                </div>
                                <div class="timeline-body">
                                    @if (isset($homes->where('title', 'media')->first()->body))
                                        <p class="text-muted">{!! nl2br(e($homes->where('title', 'oas')->first()->body))!!}</p>
                                    @else
                                        <p class="text-muted">فريق مختص بإدارة الحشود و تنظيم المعارض والفعاليات داخل
                                            وخارج الشراكة</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="timeline-image">
                            <div class="timeline-image" id="img5">
                                <img class="rounded-circle img-fluid" src="{{asset('homeImages/QT.png', true)}}"
                                     alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق الجودة</h4>
                                </div>
                                <div class="timeline-body">
                                    @if (isset($homes->where('title', 'media')->first()->body))
                                        <p class="text-muted">{!! nl2br(e($homes->where('title', 'quality')->first()->body))!!}</p>
                                    @else
                                        <p class="text-muted">مراجعة بنود تقييم الاعضاء في بداية الفصل الدراسي ومتابعة
                                            التقييم وبحث سبل تطوير عمل الشراكة</p>
                                    @endif
                                </div>
                            </div>
                        </li>

                        <!--Join Us under the teams-->
                        @if (Route::has('joinUs'))
                            <li class="timeline-inverted">
                                <div id="joinIm" class="timeline-image">
                                    <h4 id="joinUs">إنضم
                                        <br><br> إلينا !
                                    </h4>
                                </div>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">القادة الحاليين</h2>
                    <h4 class="section-subheading text-muted"><br></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://www.google.com/url?sa=i&url=http%3A%2F%2Fcostumefail.com%2F2010%2F10%2F26%2Fcaptain-america-costume-fail%2F&psig=AOvVaw0x7PAL0rp1v6RebeNGFnqz&ust=1582701592935000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKi-g4iV7OcCFQAAAAAdAAAAABAD" alt="">
                        <h4>عبدالرحمن العاصم</h4>
                        <p class="text-muted"> قائد الشراكة الطلابية</p>
                        <ul class="list-inline social-buttons " dir="ltr">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <!-- <li class="list-inline-item">
                              <a href="#">
                                <i class="fab fa-facebook-f"></i>
                              </a>
                            </li> -->
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://vignette.wikia.nocookie.net/ironman/images/a/ad/Captain-america-avengers.jpg/revision/latest?cb=20191118182630" alt="">
                        <h4>علي العتيق</h4>
                        <p class="text-muted">نائب قائد الشراكة الطلابية </p>
                        <ul class="list-inline social-buttons" dir="ltr">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
