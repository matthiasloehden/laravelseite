<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serien extends Model
{
    //protected $fillable = ['id, user_id, titel, beschreibung, updated_at'];
    protected $guarded = [];

    static public function path()
    {
        return route("serien");
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
    static public function idToName($id)
    {
        $i = User::find($id)->name;
        return $i;
    }
}
