@extends('layouts.app')

@section('title')
    <h1>Hello im blade</h1>
@endsection



@section('content')
    <div>
        <a href="{{route('tasks.create')}}">Add task</a>
    </div>

    <div>
        @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id])  }}">{{$task->title}}</a>
            </div>
        @empty
            <div>
                There are no tasks!
            </div>
        @endforelse
            @if($tasks->count())
              <div>
                  <nav>
                     {{$tasks->links()}}
                  </nav>
              </div>
            @endif
    </div>


@endsection
