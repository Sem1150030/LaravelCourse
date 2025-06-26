@extends('layouts.app')

@section('title')
    <h1>Hello im blade</h1>
@endsection


@section('content')
    <div>
        @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id])  }}">{{$task->title}}</a>
            </div>
        @empty
            <div>
                There are no tasks!
            </div>
        @endforelse
    </div>
@endsection
