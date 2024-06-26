<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsArray = Comic::all();
        return view('index', compact('comicsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        $request->validate();
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', ['comic'=> $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
