@extends('../leyout/app')

@section('title','movies')

@section('content')
    <div class="row gx-3">
        @foreach ($movies as $movie)
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 my-3">
            <div class="card ">
                <img src="{{$movie->image}}" class="card-img-top" alt="image {{$movie->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">Original title: {{$movie->original_title}}</p>
                <a href="{{route('movies.show', $movie->id)}}" class="btn btn-primary">Show this movie</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection