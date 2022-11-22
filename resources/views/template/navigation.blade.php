<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="/Home">Giant Book Supplier</a>
        <ul class="navbar-nav nav-right">
            <li class="navbar-item mx-1 {{ request()->is('Home') ? 'active' : ''}}"><a class="nav-link" href="/Home">Home</a></li>
            <li class="navbar-item dropdown mx-1 {{ request()->is('Category') ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category
                <span class="caret"></span></a>
                <div class="dropdown-menu">
                    @php( $categories = App\Models\Category::all())
                    @if(count($categories) > 0)
                        @foreach ($categories as $cate)
                            <a class="dropdown-item" href="/Category/{{$cate->id}}">{{ $cate->name }}</a>
                        @endforeach
                    @else
                        <a class="dropdown-item" href="#">-</a>
                    @endif
                </div>
            </li>
            <li class="navbar-item mx-1 {{ request()->is('Publisher') ? 'active' : ''}}"><a class="nav-link" href="/Publisher">Publisher</a></li>
            <li class="navbar-item mx-1 {{ request()->is('Contact') ? 'active' : ''}}"><a class="nav-link" href="/Contact">Contact</a></li>
        </ul>
</nav>
