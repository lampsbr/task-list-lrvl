<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});
Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->get(),
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    //$task = collect($tasks)->firstWhere('id', $id);

    return view('show', [
        'task' => \App\Models\Task::findOrFail($id),
    ]);
})->name('tasks.show');

Route::fallback(function () {
    return "Still got somewhere!";
});