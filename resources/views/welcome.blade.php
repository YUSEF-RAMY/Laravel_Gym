@extends('layouts.master')

@section('content')



    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="/">الصفحه الرئيسيه</a></li>
                {{-- <li><a href="/contacts">تواصل معنا</a></li> --}}
                {{-- <li><a href="./classes.html">اقسام الجيم</a></li> --}}
                {{-- <li><a href="./services.html">خدمات</a></li> --}}
                <li><a href="/ourteam">فريقنا</a></li>
                <li><a href="/captains">التحكم</a></li>
                {{-- <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="/aboutus">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li> --}}
                {{-- <li><a href="./contact.html">Contact</a></li> --}}
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu" dir="rtl">
                        <ul>
                            <li class="active"><a href="/">الرئيسيه</a></li>
                            {{-- <li><a href="/aboutus">من نحن</a></li> --}}
                            {{-- <li><a href="./class-details.html">Classes</a></li> --}}
                            {{-- <li><a href="./services.html">Services</a></li> --}}
                            <li><a href="/ourteam">فريقنا</a></li>
                            {{-- <li><a href="/contacts">تواصل معنا</a></li> --}}
                            {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">About us</a></li>
                                    <li><a href="./class-timetable.html">Classes timetable</a></li>
                                    <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                                    <li><a href="./team.html">Our team</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./blog.html">Our blog</a></li>
                                    <li><a href="./404.html">404</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="./contact.html">Contact</a></li> --}}
                            @auth
                            {{-- عايز اعمل هنا لما الايميل يكون بتاعي يبقي باين ليا كل حاجه =========== --}}
                            @if (auth()->user()->role == 'admin')
                            <li><a class="mx-4" href="/captains" >التحكم</a></li>
                            @endif
                            {{-- <li style="color: white">{{ auth()->user()->name }}</li> --}}
                            <li><a class="mx-3" href="#">{{ auth()->user()->name }}▾</a>
                                <ul class="dropdown">
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-and-login">
                                            @csrf
                                            <input type="hidden" name="redirect-login-again">
                                        </form>
                                    </li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
														document.getElementById('logout-form').submit();" class="mx-auto">تسجيل خروج</a></li>
                                    {{-- فيه مشكله هنا انو مش بيوديني علي الصفحه الي اغير منها الاكونت --}}
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-and-login').submit();">الدخول بمستخدم تاني</a></li>
                                </ul>
                            @endauth
                            @guest
                            <li><a href="/login" class="mx-3">تسجيل الدخول</a></li>
                            <li><a href="/register" class="mx-3">مستخدم جديد</a></li>
                            @endguest
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span style="letter-spacing: 0px">اصنع جسمك</span>
                                <h1>كون <strong>اقوي </strong>مع شمبليون جيم</h1>
                                {{-- <a href="#" class="primary-btn">معلومات اكثر</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span style="letter-spacing: 0px">اصنع جسمك</span>
                                <h1>مع <strong>الشمبلي</strong> مفيش مستحيل</h1>
                                {{-- <a href="#" class="primary-btn">Get info</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>لي تختارنا</span>
                        <h2>الوصول الي افضل مستوي من نفسك</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>احدث الاجهزه</h4>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>نظام تغذه متكامل</h4>
                        {{-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>نظام تمرين متكامل</h4>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>الوصول الي صحه جيده</h4>
                        {{-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>الخدامات المختلفه</span>
                        <h2>بنقدملك اي</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span class="fs-3">تخسيس</span>
                            <h5>فقدان الوزن</h5>
                            {{-- <a href="#"><i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span class="fs-3">الاطالات</span>
                            <h5>المرونه</h5>
                            {{-- <a href="#"><i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span class="fs-3">تمارين منزليه</span>
                            <h5>باقل الادوات</h5>
                            {{-- <a href="#"><i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span class="fs-3">القوه</span>
                            <h4>بناء العضلات</h4>
                            {{-- <a href="#"><i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span class="fs-3">تمارين</span>
                            <h4>البوكس</h4>
                            {{-- <a href="#"><i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    {{-- <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>سجل الآن للحصول على المزيد من العروض</h2>
                        <div class="bt-tips">حيث تلتقي الصحة والجمال واللياقة البدنية</div>
                        <a href="#" class="primary-btn  btn-normal">سجل الان</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>خطتنا</span>
                        <h2>اختر خطة التسعير الخاصة بك</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>شهر</h3>
                        <div class="pi-price">
                            <h2>200</h2>
                            <span>فئة واحدة</span>
                        </div>
                        <ul>
                            <li>معدات غير محدودة</li>
                            <li>مدرب شخصي</li>
                            <li>إنقاص الوزن</li>
                            <li>شهر بشهر</li>
                            <li>لا يوجد قيود زمنية</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">اشتراك الان</a>
                        {{-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>سنة</h3>
                        <div class="pi-price">
                            <h2>500</h2>
                            <span>فئة واحدة</span>
                        </div>
                        <ul>
                            <li>معدات غير محدودة</li>
                            <li>مدرب شخصي</li>
                            <li>إنقاص الوزن</li>
                            <li>شهر بشهر</li>
                            <li>لا يوجد قيود زمنية</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">اشتراك الان</a>
                        {{-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>6 شهور</h3>
                        <div class="pi-price">
                            <h2>$ 59.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>معدات غير محدودة</li>
                            <li>مدرب شخصي</li>
                            <li>إنقاص الوزن</li>
                            <li>شهر بشهر</li>
                            <li>لا يوجد قيود زمنية</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">اشتراك الان</a>
                        {{-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span class="fs-3">فريقنا</span>
                            <h2>تدريب مع الخبراء</h2>
                        </div>
                        {{-- <a href="#" class="primary-btn btn-normal appoinment-btn">سجل الان</a> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="ts-slider owl-carousel">
                    @foreach ($captain as $item)
                    <div class="col-lg-4">
                        <div class="ts-item set-bg">
                            <img src="{{ $item->image }}" alt="">
                            <div class="ts_text">
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->specialty }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- أضف هذا داخل <head> لو مش عندك Bootstrap -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

{{-- <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner text-center bg-dark p-5 rounded">

    <div class="carousel-item active">
      <h5>أحمد محمد</h5>
      <p class="text-muted">خدمة ممتازة جدًا، والتعامل احترافي!</p>
    </div>

    <div class="carousel-item">
      <h5>سارة علي</h5>
      <p class="text-muted">استلمت طلبي في المعاد بالضبط، شكراً ليكم.</p>
    </div>

    <div class="carousel-item">
      <h5>محمود سامي</h5>
      <p class="text-muted">أكتر من رائع! أنصح أي حد بيهم.</p>
    </div>

  </div>

  <!-- أزرار التنقل -->
  <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div> --}}

<!-- سكربت Bootstrap -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
@endsection