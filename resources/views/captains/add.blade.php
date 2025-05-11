@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>إضافة مدرب جديد</h2>

    <form action="{{ route('captains.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">الاسم</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">التخصص</label>
            <input type="text" name="specialty" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">رقم الهاتف</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">صورة</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">إضافة</button>
        <a href="{{ route('captains.index') }}" class="btn btn-secondary">رجوع</a>
    </form>
</div>
@endsection
