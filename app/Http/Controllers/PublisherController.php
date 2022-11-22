<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('publisher.publisher', compact('publishers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $publisherId
     * @return \Illuminate\Contracts\View\View
     */
    public function detail($publisherId)
    {
        $publisher = Publisher::findOrFail($publisherId);
        $books = Publisher::find($publisherId)->books()->get();
        return view('publisher.publisherdetail', compact('publisher', 'books'));
    }

}
