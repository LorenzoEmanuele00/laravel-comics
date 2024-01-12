@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="current">CURRENT SERIES</div>
</div>
<section class="comics-section">
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
                <div class="col">
                    <img class="box" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h4>{{ $comic['series'] }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection