<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $guarded = [];

    public function serien()
    {
        return $this->belongsToMany(serien::class);
    }
    public function film(){
        return $this->belongsToMany(film::class);
    }
}
