<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});



Route::get('/tasks', function ()  {
    return view('index', [
        'tasks'=> \App\Models\Task::latest()->paginate(15)
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');



Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
    $task->update($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])

        ->with('success', 'Task updated successfully');
})->name('tasks.update');



Route::get('/tasks/{task}/edit', function (Task $task)  {
    return view('edit',
        ['task' => $task]
    );
})->name('tasks.edit');



Route::put('tasks/{task}/toggle-complete', function(Task $task) {
    $task->toggleComplete();
    return redirect()->back()->with('succes', 'Task updated succes');
})->name('tasks.toggle-completed');



Route::get('/tasks/{task}', function (Task $task)  {
   return view('show', ['task' => $task]);
})->name('tasks.show');



Route::post('/tasks', function (TaskRequest $request) {

    $task = Task::create($request->validated());
    return redirect()->route('tasks.index')

    ->with('success', 'Task created successfully');
})->name('tasks.store');

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index');
})->name("tasks.destroy");

Route::fallback(function () {
    return '404 Not Found';
});



//
