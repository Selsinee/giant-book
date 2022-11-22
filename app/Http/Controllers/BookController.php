<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }


    /**
     * Display the specified resource.
     *
     * @param  String  $bookId
     * @return \Illuminate\Contracts\View\View
     */
    public function detail($bookId)
    {
        $book = Book::join('publishers', 'publishers.id', '=', 'books.publisher_id')
            ->where('books.id', $bookId)
            ->select('books.*', 'publishers.name')
            ->first();
        return view('book.bookdetail', compact('book'));
    }

}
