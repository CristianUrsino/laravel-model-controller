@extends('../leyout/app')

@section('title','movies')

@section('content')
<div class="row gx-3 justify-content-center">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 ">
            <div class="card ">
                <img src="{{$movie->image}}" class="card-img-top" alt="image {{$movie->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">Original title: {{$movie->original_title}}</p>
                <a href="{{route('movies.index')}}" class="btn btn-primary">Come back</a>
                </div>
            </div>
        </div>
    </div>
@endsection