<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $guarded = [];

    static public function path()
    {
        return route("todo");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
