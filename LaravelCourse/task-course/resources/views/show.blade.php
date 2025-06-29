@extends('layouts.app')

@section('title')
    <p class="font-bold text-2xl mb-5"> {{ $task->title }} </p>
@endsection

@section('content')
    <p class="text-xl mb-3">{{$task->description}}</p>

    @if($task->long_description)
    <p class="mb-3">{{ $task->long_description }}</p>
    @endif
    <div class="container">
        <p class="mb-4 text-small text-slate-500"> Created {{ $task->created_at->diffForHumans() }}
             -  Updated {{ $task->updated_at->diffForHumans() }}</p>

    </div>
    <div class="flex gap-2">
        <a href="{{route('tasks.edit', ['task' => $task->id]) }}"
            class="btn">Edit</a>

        <form method="POST" action="{{route('tasks.toggle-completed', ['task'=>$task])}}" >
            @csrf
            @method('PUT')
            <button type="submit" class="btn ">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>

        <form action="{{route('tasks.destroy',['task' => $task->id] )}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn  text-red-500">
                Delete
            </button>
        </form>
    </div>
@endsection



