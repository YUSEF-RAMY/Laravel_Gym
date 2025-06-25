@extends('layouts.master')

@section('content')
    
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
                            <li class="mx-2"><a href="/ourteam">فريقنا</a></li>
                            {{-- <li class="active mx-2"><a href="/contacts">تواصل معنا</a></li> --}}
                            <li class=""><a href="/captains">التحكم</a></li>
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






    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text mb-5">
                        <h2>تواصل معانا</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact-section spad" dir="rtl">
        <div class="container" dir="rtl">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
            <div class="row">
                <div class="col-lg-6" dir="rtl" >
                    <div class="section-title contact-title">
                        <span>تواصل معانا</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget" >
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>Kafr El Sheikh<br>Bella City</p>
                        </div>
                        <div class="cw-text" style="flex-direction: row-reverse;">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>01095132780</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>yuseframy14@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <input type="text" id="name" name="name" placeholder="Name">
                            <input type="text" id="phone" name="phone" placeholder="Phone">
                            <input type="text" id="email" name="email" placeholder="Email">
                            <textarea id="comment" name="comment" placeholder="Comment"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3413.4668130378464!2d31.228453075937683!3d31.180067563875532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDEwJzQ4LjIiTiAzMcKwMTMnNTEuNyJF!5e0!3m2!1sen!2seg!4v1750870041088!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection