<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Task Manager</h1>

        {{-- Add Task Form --}}
        <form method="POST" action="/tasks" class="bg-white p-4 rounded shadow mb-6">
            @csrf
            <div class="mb-4">
                <input type="text" name="title" placeholder="Task title" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <textarea name="description" placeholder="Task description (optional)" class="w-full p-2 border rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Task</button>
        </form>

        {{-- Tasks List --}}
        <div class="space-y-4">
            @foreach ($tasks as $task)
                <div class="bg-white p-4 rounded shadow flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold {{ $task->is_done ? 'line-through text-gray-500' : '' }}">
                            {{ $task->title }}
                        </h2>
                        @if ($task->description)
                            <p class="text-gray-600 text-sm">{{ $task->description }}</p>
                        @endif
                    </div>
                    <div class="flex space-x-2">
                        {{-- Toggle Done --}}
                        <form method="POST" action="/tasks/{{ $task->id }}/toggle">
                            @csrf
                            <button class="text-sm px-3 py-1 rounded {{ $task->is_done ? 'bg-yellow-500 text-white' : 'bg-green-600 text-white' }}">
                                {{ $task->is_done ? 'Undo' : 'Done' }}
                            </button>
                        </form>
                        {{-- Delete --}}
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm px-3 py-1 rounded bg-red-600 text-white hover:bg-red-700">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
