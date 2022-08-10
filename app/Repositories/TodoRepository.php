<?php

namespace App\Repositories;

use App\Interfaces\TodoRepositoryContract;
use App\Models\Todo;

class TodoRepository implements TodoRepositoryContract
{
    protected $model;

    public function __construct(Todo $model)
    {
        $this->model = $model;
    }

    public function store(array|object $data)
    {
        $todo = $this->model->create([
            'name' => $data->name,
            'description' => $data->description
        ]);

        return $todo;
    }

    public function all()
    {
        return $this->model->get();
    }

    public function findById(int $id)
    {
        return $this->model->find($id);
    }

    public function setDone(int $id)
    {
        $todo = $this->findById($id);
        $todo->status = 'done';
        $todo->save();

        return $todo;
    }

    public function update(int $id, array|object $data)
    {
        $todo = $this->findById($id);
        $todo->name = $data->name;
        $todo->description = $data->description;
        $todo->save();

        return $todo;
    }

    public function remove(int $id)
    {
        $todo = $this->findById($id);
        $todo->delete();

        return $todo;
    }
}
