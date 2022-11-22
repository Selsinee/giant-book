<div class="row d-flex">
    @foreach ($books as $book)
        <div class="col-md-3 card mx-4 my-4">
            <img class="card-img-top align-self-center" src="{{$book->image}}" alt="" style="width: 90%; aspect-ratio: 1/1.5">
            <div class="d-flex flex-column flex-fill justify-content-between">
                <h5 class="mt-3">{{$book->title}}</h5>
                <div>
                    <span>by</span>
                    <h6>{{$book->author}}</h6>
                </div>
                <a class="btn btn-info my-3" href="/Book/{{ $book->id }}">Details</a>
            </div>

        </div>
    @endforeach
</div>
