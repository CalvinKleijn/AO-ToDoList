<?php

namespace App;

use App\Lists;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Sortable;

	public $sortable = ['status', 'duur'];

    public function lists()
    {
        return $this->belongsTo('App\Lists');
    }
}
