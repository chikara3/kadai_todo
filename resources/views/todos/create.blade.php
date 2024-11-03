<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO作成</title>
</head>
<body>
    <h1>TODO作成</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">作成</button>
    </form>

    <a href="{{ route('todos.index') }}">戻る</a>
</body>
</html>
