@extends('layouts.master')


@section('head')

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
@endsection

@section('content')
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/aboutus">About Us</a></li>
                            <li><a href="/class-details.html">Classes</a></li>
                            <li><a href="./services.html">Services</a></li>
                            <li><a href="./team.html">Our Team</a></li>
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



    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text mb-5">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>



<h2 class="d-flex justify-content-center mt-5">Captain</h2><br>
<div class="d-flex justify-content-center" style="margin:40px auto ; width: 100%; font-size: 10px;" dir="rtl">
    <li><a href="{{route('captains.create')}}" class="btn btn-success" style="font-size: 20px">Add Captain</a></li>
</div>
<div class="container-fluid mt-4 w-75">
    <table id="myTable" class="display table table-striped">
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
                    <td>{{$captain->id}}</td>
                    <td>{{$captain->name}}</td>
                    <td>{{$captain->specialty}}</td>
                    <td>{{$captain->phone}}</td>
                    <td><img src="{{$captain->image}}" alt="صوره المنتج" width="75"></td>
                    <td>
                        <a href="{{route('captains.edit', $captain->id)}}" class="btn btn-success">edit</a>
                        
                        <form action="{{route('captains.destroy', $captain->id)}}" method="POST" style="display: inline" >
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('هل انت متاكد من عمليه الحذف')" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    <hr class="my-5">
@endsection

@section('scripts')
    <!-- jQuery أولاً -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    {{-- bootstrap  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- التهيئة -->
    <script>
        $(document).ready(function () {
            let table = new DataTable('#myTable');
        });
    </script>
@endsection
