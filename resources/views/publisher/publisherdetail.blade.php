@section('title', $publisher->name)
@extends('template.template')
@section('content')
<div class="d-flex flex-fill p-3 overflow-hidden flex-column container">
    <div class="d-flex flex-row">
        <img src="{{$publisher->image}}" alt="" style="height: 70vh">
        <div class="ml-5">
            <h3>{{$publisher->name}}</h3>
            <p><h6>Address:</h6> {{$publisher->address}}</p>
            <p><h6>Publisher:</h6> {{$publisher->phone}}</p>
            <p><h6>Email:</h6> {{$publisher->email}}</p>
        </div>
    </div>

    <div>
        <h1 class="p-3">Book List</h1>
        @include('template.booklist', ["books" => $books])
    </div>


</div>
@endsection


