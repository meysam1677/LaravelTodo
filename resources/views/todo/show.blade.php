@extends('layouts.app')

@section('content')

    <div class="card col-md-8 mt-4">
        <div class="card-header">{{$todo->title}}</div>
        <div class="card-body">{{$todo->description}}</div>
        <div class="card-footer d-flex flex-row justify-content-end">
            <form action="{{ route('todos.delete', ['todo' => $todo->id] ) }}" method="post">
                @method('Delete')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger mx-2">حذف</button>
            </form>
            <a href="{{ route('todos.edit', ['todo' => $todo->id] ) }}" class="btn btn-sm btn-dark">ویرایش</a>
        </div>
    </div>

@endsection
