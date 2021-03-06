<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function relTasks()
    {
        return $this->hasMany('App\Models\ModelTask', 'id');
    }
}
