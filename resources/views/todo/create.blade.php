@extends('layouts.app')

@section('content')

    <div class="card col-md-8 mt-4">
        <div class="card-header">ایجاد فعالیت</div>
        <div class="card-body">
            <form id="form" method="POST" action="{{ route('todos.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان</label>
                    <input type="text" class="form-control @error('title') form-control-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2 mt-3">
                    <label for="description" class="form-label">توضیحات</label>
                    <textarea class="form-control @error('title') form-control-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
        <div class="card-footer d-flex flex-row justify-content-end">
            <a href="/" class="btn btn-sm btn-secondary mx-2">بستن</a>
            <button type="submit" form="form" class="btn btn-sm btn-primary">ذخیره</button>
        </div>
    </div>

@endsection
