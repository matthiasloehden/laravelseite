<?php

namespace App\Http\Controllers;

use App\serien;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class SerienController extends Controller
{
    //
    public function index()
    {
        if (request("tag")) {
            $serien = \App\tag::where("name", request("tag"))->firstOrFail()->serien;
        } else {
            $serien = serien::all();
        }
        return view('serien', ["serien" => $serien]);

    }

    public function create()
    {
        return view("serienadd", ["tags" => \App\tag::all()]);
    }

    public function store()
    {
        $this->validateSerien();
        $serie = new serien(request(["titel", "beschreibung"]));
        $serie->user_id = auth()->id();
        $serie->save();
        $serie->tags()->attach(request("tags"));

        return redirect(serien::path());
    }

    public function destroy(serien $serien)
    {
        $serien->delete();
        return redirect(serien::path());
    }

    public function edit(serien $serien)
    {
        return view("serienedit", compact("serien"), ["tags" => \App\tag::all()]);
    }

    public function update(serien $serien)
    {
        $this->validateSerien();
        $serie = new serien(request(["titel", "beschreibung"]));
        $serie->user_id = auth()->id();
        $serien->update($serie->getAttributes());

        if (\request("tags")) {
            $serien->tags()->sync(request("tags"));
        }

        //$serien->update($this->validateSerien());
        return redirect(serien::path());
    }

    protected function validateSerien()
    {
        return request()->validate([
            "titel" => ["required", "min:3"],
            "beschreibung" => "required",
            "tags" => "exists:tags,id"
        ]);
    }

    public function search()
    {
        $q = \request("q");
        $search = serien::where("titel", "LIKE", "%" . $q . "%")->orWhere("beschreibung", "LIKE", "%" . $q . "%")->get();

        $serien = serien::all();
        return view('serien', compact("search", "q", "serien"));
    }

}
