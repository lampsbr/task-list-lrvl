@extends('layouts.app')
@section('styles')
<style>
    div.task {
        font-size: larger;
    }
</style>
@section('title', 'TASK LIST')
@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create')}}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task</a>
</nav>
<div>
    @forelse($tasks as $task)
    <div class="task">
        <a href="{{ route('tasks.show', ['task' => $task->id])  }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a>
    </div>
    @empty
    <div>There are NO tasks!</div>
    @endforelse

    @if($tasks->count())
    <nav class="mt-4">
        {{ $tasks->links() }}
    </nav>
    @endif

</div>
@endsection
