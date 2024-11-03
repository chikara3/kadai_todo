<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO編集</title>
</head>
<body>
    <h1>TODO編集</h1>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" value="{{ $todo->title }}" required>
        <button type="submit">更新</button>
    </form>

    <a href="{{ route('todos.index') }}">戻る</a>
</body>
</html>
