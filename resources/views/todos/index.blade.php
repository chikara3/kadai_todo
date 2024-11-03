<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOリスト</title>
</head>
<body>
    <h1>TODOリスト</h1>

    <a href="{{ route('todos.create') }}">新規作成</a>

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->title }}
                <a href="{{ route('todos.show', $todo->id) }}">詳細</a>
                <a href="{{ route('todos.edit', $todo->id) }}">編集</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
