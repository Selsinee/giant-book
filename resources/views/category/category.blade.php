@section('title', $categoryName)
@extends('template.template')
@section('content')
<div class="flex-fill p-3 overflow-hidden container">
    <h1 class="my-3">{{$categoryName}}</h1>
    @if (count($books) > 0)
        @include('template.booklist', ["books" => $books])
    @else
        <h5>There are no books in this category</h5>
    @endif

</div>
@endsection


