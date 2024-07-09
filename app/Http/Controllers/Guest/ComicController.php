<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        // DB::table('Comics')->insert([
        //     'title' => $data['title'],
        //     'description' => $data['description'],
        //     'price' => $data['price'],
        //     'series' => $data['series'],
        //     'sale_date' => $data['sale_date'],
        //     'type' => $data['type'],
        //     'thumb' => $data['thumb'],
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // return redirect()->route('comics.index');

        $data = $request->validate([
            "title" => "required|min:3|max:200",
            "description" => "required|min:3|max:255",
            "price" => "required|decimal:2|min:0.99|max:999.99",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required",
            "thumb" => "required|max:255",
        ]);

        $newComic = new Comic();

        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comic = Comic::findOrFail($id);

        $data = [
            "comic" => $comic
        ];

        return view('comics.show',  $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            "comic" => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // $data = $request->all();

        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];
        // $comic->thumb = $data["thumb"];
        // $comic->save();

        $data = $request->validate([
            "title" => "required|min:3|max:200",
            "description" => "required|min:3|max:255",
            "price" => "required|decimal:2|min:0.99|max:999.99",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required",
            "thumb" => "required|max:255",
        ]);

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
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
