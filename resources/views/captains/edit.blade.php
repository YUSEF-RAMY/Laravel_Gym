@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>تعديل بيانات الكابتن</h2>

    <form action="{{ route('captains.update', $captain->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $captain->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">التخصص</label>
            <input type="text" name="specialty" class="form-control" value="{{ old('specialty', $captain->specialty) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">الرقم</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $captain->phone) }}" required>
        </div>
        {{-- data links  --}}
        <div class="mb-3">
            <label for="facebook" class="form-label">الفيس بوك</label>
            <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $captain->facebook) }}" required>
        </div>

        <div class="mb-3">
            <label for="instgram" class="form-label">الانستجرام</label>
            <input type="text" name="instgram" class="form-control" value="{{ old('instgram', $captain->instgram) }}" required>
        </div>
        {{-- end data links  --}}
        <div class="mb-3">
            <label for="image" class="form-label">صورة (اختياري)</label>
            <input type="file" name="image" class="form-control">
            <div class="mt-2">
                <img src="{{ asset($captain->image) }}" width="100" alt="صورة حالية">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">تحديث</button>
        <a href="{{ route('captains.index') }}" class="btn btn-secondary">رجوع</a>
    </form>
</div>
@endsection
