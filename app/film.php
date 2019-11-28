<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(tag::class);
    }
}
