<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryId)
    {
        // $books = Category::join('book_category', 'book_category.category_id', '=', 'categories.id')
        //     ->join('books', 'books.id', '=', 'book_category.book_id')
        //     ->where('categories.id', $categoryId)->get();
        $result = Category::find($categoryId);
        $books = $result->books()->get();
        $categoryName = $result->name;
        return view('category.category', compact('books', 'categoryName'));
    }

}
