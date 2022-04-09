@extends('layouts.app')

@section('content')

    <div class="card col-md-8 mt-4">
        <div class="card-header d-flex justify-content-center justify-align-center p-3">
            {{-- <h6 class="m-0"> --}}
                برای جستجوی شما
                <b class="mx-1"> {{ $result->total() }} </b>
                {{-- <b class="mx-1"> {{ count($result) }} </b> --}}
                نتیجه یافت شد.
            {{-- </h6> --}}
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush p-0">
                @foreach ($result as $todo)
                    <li class="list-group-item d-flex justify-content-between">
                        <a class="btn-text" href="{{ route('todos.show', ['todo' => $todo->id] ) }}" alt="{{$todo->title}}">
                            {{$todo->title}}
                        </a>
                        <div class="d-flex flex-row">
                            @if ($todo->complated)
                                <span class="text-success small mt-1 mx-2">انجام شده</span>
                            @else
                                <a class="btn btn-sm btn-success" href="{{ route('todos.complated', ['todo' => $todo->id] ) }}">انجام دادم</a>
                            @endif
                            <a class="btn btn-sm btn-outline-primary mx-2" href="{{ route('todos.edit', ['todo' => $todo->id] ) }}" alt="{{$todo->title}}">ویرایش</a>
                            <a class="btn btn-sm btn-dark" href="{{ route('todos.show', ['todo' => $todo->id] ) }}" alt="{{$todo->title}}">نمایش</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer d-flex flex-row justify-content-center" style="padding-top: 1.3rem">
            {{ $result->withQueryString()->links() }}
        </div>
    </div>


@endsection
