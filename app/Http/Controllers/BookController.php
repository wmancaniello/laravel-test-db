<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $bookTitles = Book::all()->pluck('title');
        // dd($bookTitles);
        return view('books', compact('bookTitles'));
    }
}
