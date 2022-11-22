@section('title', 'Books List')
@extends('template.template')
@section('content')
<div class="flex-fill p-3 overflow-hidden container">
    <h1 class="my-3">Book List</h1>
    @include('template.booklist', ["books" => $books])
</div>
@endsection


