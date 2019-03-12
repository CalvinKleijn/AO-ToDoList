<?php

namespace App;

use App\Task;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
