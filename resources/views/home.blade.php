@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img src="{{  $comic['thumb']  }}" alt="">
                        <h5>{{  $comic['title']  }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection