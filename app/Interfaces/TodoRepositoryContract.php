<?php

namespace App\Interfaces;

interface TodoRepositoryContract 
{
    public function store(array|object $data); 
    
    public function all();

    public function findById(int $id);

    public function setDone(int $id);

    public function update(int $id, array|object $data);

    public function remove(int $id);
}