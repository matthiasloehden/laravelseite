<?php

namespace App\Http\Controllers;

use App\film;
use App\tag;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::All();

        return view("film", compact("film"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("filmadd", ["tags" => tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(film $film)
    {
        $this->validateFilm();
        $film = new film(["titel" => \request("titel"), "beschreibung" => \request("beschreibung")]);
        $film->user_id = auth()->id();
        $film->save();
        $film->tags()->attach(\request("tag"));

        redirect("film");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\film $film
     * @return \Illuminate\Http\Response
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\film $film
     * @return \Illuminate\Http\Response
     */
    public function edit(film $film)
    {
        return view("filmedit", compact("film"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\film $film
     * @return \Illuminate\Http\Response
     */
    public function update(film $film)
    {
        $this->validateFilm();
        $f = new film(request(["titel", "beschreibung"]));
        $f->user_id = auth()->id();
        $f->update($f->getAttributes());

        redirect("filme");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\film $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(film $film)
    {
        $film->delete();
        redirect("filme");
    }

    public function validateFilm()
    {
        return \request()->validate([
            "titel" => "required",
            "beschreibung" => "required",
            "tag" => "exists::tags,id"]);
    }

}
