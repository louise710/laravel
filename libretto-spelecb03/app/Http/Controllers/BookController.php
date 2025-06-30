<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'genres'])->paginate(10);
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        $book->load(['author', 'genres', 'reviews']);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'genres' => 'array|exists:genres,id',
        ]);

        $book = Book::create([
            'title' => $validated['title'],
            'author_id' => $validated['author_id'],
        ]);

        if (!empty($validated['genres'])) {
            $book->genres()->attach($validated['genres']);
        }

        return redirect()->route('books.show', $book);
    }
}
