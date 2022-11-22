@section('title', $book->title)
@extends('template.template')
@section('content')
<div class="d-flex flex-fill p-3 overflow-hidden flex-row container">
    <img src="{{$book->image}}" alt="" style="height: 70vh">
    <div class="ml-5">
        <h3>{{$book->title}}</h3>
        <p><h6>Author:</h6> {{$book->author}}</p>
        <p><h6>Publisher:</h6> {{$book->name}}</p>
        <p><h6>Synopsis:</h6> {{$book->synopsis}}</p>
    </div>

</div>
@endsection


