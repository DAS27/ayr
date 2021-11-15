@extends('layouts.app')

@section('content')
    @foreach($moviesList as $movie)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">
                            {{ $movie->year }}<br/>
                            {{ $movie->genre }}<br>
                            {{ $movie->genre }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
