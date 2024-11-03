<?php

namespace App\Http\Controllers;

use App\Models\Todo; // Todoモデルを使用
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // 一覧表示
    public function index()
    {
        $todos = Todo::all(); // すべてのTODO項目を取得
        return view('todos.index', compact('todos')); // ビューにデータを渡す
    }

    // 新規作成フォーム
    public function create()
    {
        return view('todos.create'); // 新規作成フォームを表示
    }

    // 新規作成処理
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255', // バリデーション
        ]);

        Todo::create($request->only('title')); // TODOを作成

        return redirect()->route('todos.index'); // 一覧ページにリダイレクト
    }

    // 詳細表示
    public function show($id)
    {
        $todo = Todo::findOrFail($id); // IDに基づいてTODOを取得
        return view('todos.show', compact('todo')); // ビューにデータを渡す
    }

    // 編集フォーム
    public function edit($id)
    {
        $todo = Todo::findOrFail($id); // IDに基づいてTODOを取得
        return view('todos.edit', compact('todo')); // ビューにデータを渡す
    }

    // 更新処理
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255', // バリデーション
        ]);

        $todo = Todo::findOrFail($id); // IDに基づいてTODOを取得
        $todo->update($request->only('title')); // TODOを更新

        return redirect()->route('todos.index'); // 一覧ページにリダイレクト
    }

    // 削除処理
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id); // IDに基づいてTODOを取得
        $todo->delete(); // TODOを削除

        return redirect()->route('todos.index'); // 一覧ページにリダイレクト
    }
}
