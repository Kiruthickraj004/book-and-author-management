<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::with('books')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:authors'
        ]);

        return Author::create($data);
    }

    public function show(Author $author)
    {
        return $author->load('books');
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:authors,email,' . $author->id
        ]);

        $author->update($data);
        return $author;
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return response()->noContent();
    }
}

