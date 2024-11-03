<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO詳細</title>
</head>
<body>
    <h1>TODO詳細</h1>

    <h2>{{ $todo->title }}</h2>

    <a href="{{ route('todos.edit', $todo->id) }}">編集</a>
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
    </form>

    <a href="{{ route('todos.index') }}">戻る</a>
</body>
</html>
