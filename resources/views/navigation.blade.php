@if (Route::has('login'))
<div class="card-body">
    <a class="navbar-brand" href="/">
        {{config('app.name')}}
    </a>
    <ul class="nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Clear search</a></li>
        {!! Form::open(['route' => 'articles.search', 'id' => 'searchForm']) !!}
        {!! Form::text('searchText', null, ['class' => 'form-control', 'placeholder' => 'Type your text', 'maxlength' => 20]) !!}        
        {!! Form::close() !!}
        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
        @auth       
        <li class="nav-item"><a class="nav-link" href="{{ route('articles.create') }}">Add article</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @endif
        @endauth
    </ul>
</div>
@endif 