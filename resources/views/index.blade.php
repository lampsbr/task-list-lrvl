<h1>Hello, I'm a blade template!</h1>
<div>
    @forelse($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id])  }}">{{ $task->title }}</a>
    </div>
    @empty
    <div>There are NO tasks!</div>
    @endforelse

</div>
