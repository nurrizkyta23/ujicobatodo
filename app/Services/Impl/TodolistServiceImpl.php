<?php

namespace App\Services\Impl;

use App\Models\Todo;
use App\Services\TodolistService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class TodolistServiceImpl implements TodolistService
{
    public function editTodo(string $todoId, string $newTodo, ?string $newDeadline = null, ?string $newCatatan = null): void
    {
        $todo = Todo::find($todoId);
        if ($todo != null) {
            $todo->todo = $newTodo;
            $todo->deadline = $newDeadline;
            $todo->catatan = $newCatatan;
            $todo->save();
        }
    }

    public function saveTodo(string $id, string $todo, ?string $deadline = null, ?string $catatan = null) : void
    {
        $todo = new Todo([
            "id" => $id,
            "todo" => $todo,
            "deadline" => $deadline,
            "catatan" => $catatan,
            "user_id" => Auth::id() // Assign the logged-in user ID
        ]);
        $todo->save();
    }

    public function getTodolist(): array
    {
        return Todo::query()->where('user_id', Auth::id())->get()->toArray(); // Fetch todos for the logged-in user
    }

    public function getTodoById(string $id)
    {
        return Todo::where('user_id', Auth::id())->find($id); // Ensure only the user's todo is fetched
    }

    public function removeTodo(string $todoId)
    {
        $todo = Todo::where('user_id', Auth::id())->find($todoId);
        if ($todo != null) {
            $todo->delete();
        }
    }
}