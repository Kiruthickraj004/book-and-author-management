<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::with('author')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'author_id' => 'required|exists:authors,id'
        ]);

        return Book::create($data);
    }

    public function show(Book $book)
    {
        return $book->load('author');
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'author_id' => 'required|exists:authors,id'
        ]);

        $book->update($data);
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}

