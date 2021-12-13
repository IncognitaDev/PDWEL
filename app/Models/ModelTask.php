<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTask extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'status', 'id_category'];

    public function relCategory()
    {
        return $this->hasOne('App\Models\ModelCategory', 'id', "id_category");
    }
}
