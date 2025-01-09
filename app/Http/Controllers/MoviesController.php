<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    // Tampilkan daftar film
    public function index()
    {
        $movies = Movie::all();
        return view('Movies.index', compact('movies'));
    }

    // Form tambah film
    public function create()
    {
        $genres = Genre::all();
        return view('Movies.create', compact('genres'));
    }

    // Simpan film baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string|max:1000',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'year' => 'required|date',
            'available' => 'required|boolean',
            'genre_id' => 'required|exists:genres,id',
        ]);

        if ($request->file('poster')) {
            $validated['poster'] = $request->file('poster')->store('movie-'  . date('Y') . date('m') . date('d'));
        }

        Movie::create([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'poster' => $validated['poster'],
            'year' => $validated['year'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre'], // Foreign key field
        ]);

        return redirect()->route('movies.index')->with('success', 'Movie has been successfully created!');
    }

    // Form edit film
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        return view('Movies.edit', compact('movie', 'genres'));
    }

    // Update data film
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string|max:1000',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'year' => 'required|date',
            'available' => 'required|boolean',
            'genre_id' => 'required|exists:genres,id',
        ]);

        /**
         * Ambil buku sesuai dengan id yang dikirim / lalu update berdasarkan perubahan yang dikirimkan user
         */
        $movie = Movie::findOrFail($id);

        $movie->update([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'poster' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg',
            'year' => $validated['year'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre'], // Foreign key field
        ]);

        /**
         * Kembalikan user ke halaman list books
         */
        return redirect()->route('movies.index')->with('success', 'Movie has been successfully updated!');
    }

    // Hapus film
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie has been successfully deleted!');
    }
}
