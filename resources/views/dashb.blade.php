@extends('layouts.master')

{{-- jquery data table  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
<script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>

@section('content')
<div class="p-6 container mt-5 mb-5">
    <h2 class="text-2xl font-bold mb-4">الكباتن</h2>
    <a href="{{ route('captains.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">+ إضافة كابتن</a>

    <table id="myTable" class="display">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>specialty</th>
            <th>image</th>
            <th>action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($captains as $captain)
                
            @endforeach
            <td>{{$captain->id}}</td>
            <td>{{$captain->name}}</td>
            <td>{{$captain->specialty}}</td>
            <img src="{{$captain->image}}" alt="صوره الكابتن"></img>
            <td>
                <a href="#" class="btn btn-primary w-50" style="font-size:20px ">تعديل</a>
                <a href="#" class="btn btn-danger w-50" style="font-size: 20px">حذف</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script>
