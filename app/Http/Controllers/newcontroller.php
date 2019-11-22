<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\titel;

class newcontroller extends Controller
{
    public function show($titel)
    {
        $post = titel::where("titel",$titel)->firstOrFail();
        //$post = \DB::table("testtable")->where("titel",$titel)->first();
        //if (! $post){abort(404);}

        //$name = request("name");
        return view('test', [
            "post" => $post
        ]);
    }
}
