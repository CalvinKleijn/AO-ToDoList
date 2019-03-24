<?php

namespace App;

use App\Lists;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function lists()
    {
        return $this->belongsTo('App\Lists');
    }
}
