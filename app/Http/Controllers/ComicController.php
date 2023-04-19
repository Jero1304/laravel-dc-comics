<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {

        $comics = Comic::all();

        // $data = [
        //     'comics' => $comics
        // ];

        // $data = compact('comics');

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'nullable|max:255|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required|max:255',
            'series' => 'nullable|max:255|string',
            'sale_date' => 'nullable|date',

        ]);
        // dd($data);
        // $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        //https://www.focus.it/site_stored/imgs/0003/036/spiderman.jpg
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];

        $new_comic->save();

        return to_route('comics.show', $new_comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        // dd($comic,$request->all());
        $data = $request->all();
        // $comic->update($data);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];

        $comic->save();

        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        // dd($comic);
        $comic->delete();
        return to_route('comics.index');
    }
}