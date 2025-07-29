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
                <li><a href="/">الرئيسيه</a></li>
                {{-- <li><a href="/about-us.html">About Us</a></li> --}}
                {{-- <li><a href="./class-details.html">Classes</a></li> --}}
                {{-- <li><a href="./services.html">Services</a></li> --}}
                <li><a href="/ourteam">فريقنا</a></li>
                <li><a href="/captains">التحكم</a></li>
                {{-- <li><a href="#">Pages</a> --}}
                    {{-- <ul class="dropdown">
                        <li><a href="./about-us.html">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul> --}}
                {{-- </li> --}}
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
                            <li><a href="/" class="mx-2">الرئيسيه</a></li>
                            {{-- <li><a href="/aboutus">About Us</a></li> --}}
                            {{-- <li><a href="./class-details.html">Classes</a></li> --}}
                            {{-- <li><a href="./services.html">Services</a></li> --}}
                            <li class="active mx-2"><a href="/ourteam">فريقنا</a></li>
                            {{-- <li><a href="/contacts">تواصل معنا</a></li> --}}
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
                                    </li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
														document.getElementById('logout-form').submit();" class="mx-auto">تسجيل خروج</a></li>
                                    <li><a href="/login">الدخول بمستخدم تاني</a></li>
                                </ul>
                            @endauth
                            @guest
                            <li><a href="/login" class="mx-3">تسجيل الدخول</a></li>
                            <li><a href="/register" class="mx-3">مستخدم جديد</a></li>
                            @endguest
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text mb-5">
                        <h2>فريقنا</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span class="fs-2">المدربين</span>
                            <h2>العظمه تتكلم هنا</h2>
                        </div>
                        {{-- <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                
                @foreach ($captains as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg">
                        <img src="{{ $item->image }}" alt="صوره المدرب">
                        <div class="ts_text">
                            <h4>{{ $item->name }}</h4>
                            <span>{{ $item->specialty }}</span>
                            <div class="tt_social">
                                <a href="{{ $item->facebook }}" target="_bland"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $item->instgram }}" target="_bland"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection