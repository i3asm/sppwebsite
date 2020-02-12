@extends('mainStyle')

@section('content')
    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">من نحن؟</h2>
                    <h3 class="section-subheading text-muted">برنامج الشراكة الطلابية يهتم باحتضان المبادرات الطلابية
                        وصقل
                        الجوانب
                        المهارية لدى الطلبة بطريقة عمل إبداعية وإحترافية</h3>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary1"></i>
            <i class="fas fa-eye fa-stack-1x fa-inverse "></i>
          </span>
                <h4 class="service-heading">رؤيتنا</h4>
                @if (isset($homes))
                    <p class="text-muted text-center">{!! nl2br($homes->where('title', 'vision')->first()->body) !!}
                @else
                    <p class="text-muted text-center">الريادة والتميز بالأنشطة الطلابية
                @endif
                <p><br></p>
            </div>
            <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary2"></i>
            <i class="fas fa-envelope-open fa-stack-1x fa-inverse"></i>
          </span>
                <h4 class="service-heading">رسالتنا</h4>
                @if (isset($homes))
                    <p class="text-muted">{!! nl2br($homes->where('title', 'message')->first()->body) !!}</p>
                @else
                    <p class="text-muted">تمكين الطلبة من اكتشاف ذواتهم وتنمية قدراتهم من خلال بيئة إيجابية محفزة على
                        الإبداع والإبتكار</p>
                @endif
                <p><br></p>
            </div>
            <div class="col-md-4">
          <span class="fa-stack fa-4x">

            <i class="fas fa-circle fa-stack-2x text-primary3"></i>
            <i class="fas fa-bullseye fa-stack-1x fa-inverse"></i>
          </span>
                <h4 class="service-heading"> أهدافنا</h4>
                @if (isset($homes))
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
                                     src="https://images.unsplash.com/photo-1544743744-48719693e9d9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                     alt="">
                            </div>
                            <div class="timeline-body">
                                @if (isset($homes))
                                    <p class="text-muted">{!! nl2br(e($homes->where('title', 'media')->first()->body))!!}</p>
                                @else
                                    <p class="text-muted">القيام بالأمور الإعلامية من تنسيق وتوثيق ونشر فعاليات الشراكة
                                        الطلابية وتحقيق المحتوى</p>
                                @endif
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image " id="img2">
                            <img class="rounded-circle img-fluid" src="https://i.ibb.co/7yNpTcq/PR.png" alt="">
                        </div>
                        <div class="timeline-panel ">
                            <div class="timeline-heading">
                                <h4 class="d-none d-lg-block "><br></h4>
                                <h4 class="subheading ">فريق العلاقات العامة</h4>
                            </div>
                            <div class="timeline-body  ">
                                @if (isset($homes))
                                    <p class="text-muted ">{!! nl2br(e($homes->where('title', 'pr')->first()->body))!!}</p>
                                @else
                                    <p class="text-muted ">تمثيل الشراكة والعمل على تسويقها وجلب الرعايات والتواصل مع
                                        الجهات الراعية</p>
                                @endif
                            </div>
                            <div class="timeline-panel ">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading ">فريق العلاقات العامة</h4>
                                </div>
                                <div class="timeline-body  ">
                                    <p class="text-muted ">تمثيل الشراكة والعمل على تسويقها وجلب الرعايات والتواصل مع
                                        الجهات
                                        الراعية</p>
                                </div>
                            </div>
                            <div class="timeline-body">
                                @if (isset($homes))
                                    <p class="text-muted">{!! nl2br(e($homes->where('title', 'hr')->first()->body))!!}</p>
                                @else
                                    <p class="text-muted">إدارة شؤون أعلى موارد الأرض الإنسان واستقطاب الكفاءات منهم</p>
                                @endif
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق الموارد البشرية</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> إدارة شؤون أعلى موارد الأرض الإنسان واستقطاب الكفاءات
                                        منهم</p>
                                </div>
                            </div>
                            <div class="timeline-body">
                                @if (isset($homes))
                                    <p class="text-muted">{!! nl2br(e($homes->where('title', 'oas')->first()->body))!!}</p>
                                @else
                                    <p class="text-muted">فريق مختص بإدارة الحشود و تنظيم المعارض والفعاليات داخل وخارج
                                        الشراكة</p>
                                @endif
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق التنظيم والدعم</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">فريق مختص بإدارة الحشود و تنظيم المعارض والفعاليات داخل وخارج
                                        الشراكة</p>
                                </div>
                            </div>
                            <div class="timeline-body">
                                @if (isset($homes))
                                    <p class="text-muted">{!! nl2br(e($homes->where('title', 'quality')->first()->body))!!}</p>
                                @else
                                    <p class="text-muted">مراجعة بنود تقييم الاعضاء في بداية الفصل الدراسي ومتابعة
                                        التقييم وبحث سبل تطوير عمل الشراكة</p>
                                @endif
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="d-none d-lg-block "><br></h4>
                                    <h4 class="subheading">فريق الجودة</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">مراجعة بنود تقييم الاعضاء في بداية الفصل الدراسي ومتابعة
                                        التقييم
                                        وبحث سبل تطوير
                                        عمل الشراكة</p>
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

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://i.ibb.co/xfMhzmQ/1.jpg" alt="">
                        <h4>Kay Garland</h4>
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
                        <img class="mx-auto rounded-circle" src="https://i.ibb.co/6Pxb59Y/2.jpg" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">نائب قائد الشراكة الطلابية </p>
                        <ul class="list-inline social-buttons" dir="ltr">
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
                <!-- <div class="row">
                  <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted"></p>
                  </div>
                </div> -->
            </div>
        </div>
    </section>

@endsection
