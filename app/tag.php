<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

    public function serien()
    {
        return $this->belongsToMany(serien::class);
    }
}
