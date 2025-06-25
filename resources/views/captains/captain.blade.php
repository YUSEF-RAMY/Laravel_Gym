@extends('layouts.master')


@section('head')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
@endsection

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
                            <li class=" mx-2"><a href="/ourteam">فريقنا</a></li>
                            <li class="active"><a href="/captains">التحكم</a></li>
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



    <h2 class="d-flex justify-content-center mt-5">Captain</h2><br>

    <div class="container mt-4  w-75">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <a href="{{ route('captains.create') }}" class="btn btn-success">Add Captain</a>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="display table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>specialty</th>
                        <th>phone</th>
                        <th>image</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($captains as $captain)
                        <tr>
                            <td>{{ $captain->id }}</td>
                            <td>{{ $captain->name }}</td>
                            <td>{{ $captain->specialty }}</td>
                            <td>{{ $captain->phone }}</td>
                            <td><img src="{{ $captain->image }}" alt="صوره المنتج" width="75"></td>
                            <td>
                                <a href="{{ route('captains.edit', $captain->id) }}" class="btn btn-primary">edit</a>

                                <form action="{{ route('captains.destroy', $captain->id) }}" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('هل انت متاكد من عمليه الحذف')"
                                        class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr class="my-5">
@endsection

@section('scripts')
    <!-- jQuery أولاً -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    {{-- bootstrap  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- التهيئة -->
    <script>
        $(document).ready(function() {
            let table = new DataTable('#myTable');
        });
    </script>
@endsection
