<?php

namespace App;

use App\Lists;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Lists()
    {
        return $this->belongsTo(Lists::class, 'list_id', 'id');
    }
}
