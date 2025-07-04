@extends('layouts.app')

@section('title')
    <h1 class="text-2xl font-bold pb-2">Hello im blade</h1>
@endsection



@section('content')
    <nav class="mb-4 mt-3">
        <a class="btn" href="{{route('tasks.create')}}"
        class="font-medium text-gray-700 underline decoration-pink-500">Add task</a>
    </nav>

    <div >
        @forelse($tasks as $task)
            <div>
                <a @class(['line-through' => $task->completed])

                 href="{{ route('tasks.show', ['task' => $task->id])  }}">
                 {{$task->title}}</a>
            </div>
        @empty
            <div>
                There are no tasks!
            </div>
        @endforelse
            @if($tasks->count())
              <div>
                  <nav class="mt-4">
                     {{$tasks->links()}}
                  </nav>
              </div>
            @endif
    </div>


@endsection
