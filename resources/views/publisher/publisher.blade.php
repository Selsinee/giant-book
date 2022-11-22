@section('title', 'Publisher List')
@extends('template.template')
@section('content')
<div class="flex-fill p-3 overflow-hidden container">
    <h1 class="p-3">Publisher</h1>
        <div class="row d-flex">
            @foreach ($publishers as $pub)
                <div class="col-md-2 card mx-4 my-4">
                    <img class="card-img-top align-self-center" src="{{$pub->image}}" alt="" style="width: 90%">
                    <div class="d-flex flex-column flex-fill justify-content-between">
                        <h5 class="mt-3">{{$pub->name}}</h5>
                        <div>
                            <span>Address</span>
                            <h6>{{$pub->address}}</h6>
                        </div>
                        <a class="btn btn-info my-3" href="/Publisher/{{ $pub->id }}">Details</a>
                    </div>

                </div>
            @endforeach
    </div>
</div>


@endsection
