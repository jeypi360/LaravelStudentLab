<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 40px auto; padding: 0 16px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #e9f1f2; }
    </style>
</head>
<body>
    <h1>My Tasks</h1>
    <table>
        <thead>
            <tr><th>ID</th><th>Task Title</th><th>Status</th></tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                </tr>
            @empty
                <tr><td colspan="3">No tasks found.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
