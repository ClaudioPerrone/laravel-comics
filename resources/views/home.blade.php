@extends('layouts.app')

@section('main-content')
    <div class="hero"></div>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card">
                    <img src="{{  $comic['thumb']  }}" alt="">
                </div>
                <h5 class="title">{{ $comic['series'] }}</h5>
            </div>
            @endforeach
        </div>
    </div>
@endsection