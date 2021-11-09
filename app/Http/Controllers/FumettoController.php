<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fumetto;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Fumetto::all();
        // dd($comics);
        return view("comic.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Fumetto $comic)
    {
        $comic = new Fumetto();
        return view("comic.create", compact("comic", "request"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $comic = new Fumetto();
        $comic = Fumetto::create($data);
        $comic->save();

        return redirect()->route('comic.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetto $comic)
    {
        
        return view("comic.show", compact("comic"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Fumetto $comic)
    {
        return view("comic.edit", compact("comic", "request"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comic.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $comic)
    {
        $comic->delete();

        return redirect()->route("comic.index")->with("delete", $comic->title);
    }
}
