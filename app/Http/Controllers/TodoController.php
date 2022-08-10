<?php

namespace App\Http\Controllers;

use App\Interfaces\TodoRepositoryContract;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    protected $todoRepository;
    
    public function __construct(TodoRepositoryContract $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function store(TodoRequest $request)
    {
        return response()->json(['todo' => $this->todoRepository->store($request)], 201);
    }

    public function all()
    {
        return response()->json(['todos' => $this->todoRepository->all()], 200);
    }

    public function findById($id)
    {
        return response()->json(['todo' => $this->todoRepository->findById($id)], 200);
    }

    public function setDone($id)
    {
        return response()->json(['todo' => $this->todoRepository->setDone($id)], 200);
    }

    public function update($id, TodoRequest $request)
    {
        return response()->json(['todo' => $this->todoRepository->update($id, $request)], 200);
    }

    public function remove($id)
    {
        return response()->json(['todo' => $this->todoRepository->remove($id)], 200);
    }
}
