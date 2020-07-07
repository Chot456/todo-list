<?php

namespace App\Repositories;


use App\todo;

class TodoRepository
{
    public function all()
    {
        return todo::orderBy('id')
            ->with('user')
            ->get();
    }

    
}