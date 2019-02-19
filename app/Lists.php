<?php

namespace App;

use App\Task;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
	protected $table = 'lists';

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
