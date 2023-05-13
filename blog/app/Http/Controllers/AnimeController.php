<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{

    public function index()
    {
        $animes = Anime::all();

        return view('admin.animes', compact('animes'));
    }

    public function carousel()
    {
        $animes = Anime::select('id', 'title', 'image', 'episodes')
            ->groupBy('id', 'title', 'image', 'episodes')
            ->take(15)
            ->get()
            ->unique('title')
            ->values();

        return view('pages.home', compact('animes'));
    }

    public function animelist()
    {
        $animes = Anime::orderBy('title', 'asc')->get();

        return view('pages.lista-anime', compact('animes'));
    }

    public function show($id)
    {
        $anime = Anime::findOrFail($id);

        return view('pages.anime', compact('anime'));
    }

    public function create()
    {
        return view('admin.add-anime');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'rating' => 'required',
            'year' => 'required',
            'genres' => 'required',
            'studio' => 'required',
            'episodes' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('anime_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Anime::create($validatedData);

        return redirect()->route('admin.animes')->with('success', 'Anime-ul a fost adăugat cu succes!');
    }

    public function edit($id)
    {
        $anime = Anime::findOrFail($id);

        return view('admin.edit-anime', compact('anime'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'rating' => 'required',
            'year' => 'required',
            'genres' => 'required',
            'studio' => 'required',
            'episodes' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $anime = Anime::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('anime_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $anime->update($validatedData);

        return redirect()->route('admin.animes')->with('success', 'Anime-ul a fost actualizat cu succes!');
    }

    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();

        return redirect()->route('admin.animes')->with('success', 'Anime-ul a fost șters cu succes!');
    }

    // Relatia one to many

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
