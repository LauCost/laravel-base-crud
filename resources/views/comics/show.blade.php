@extends('layouts.app')

@section('content')

    <div class="comic">
        <div class="poster">

            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} poster">
        </div>

        <p>{{ $comic->series }}</p>
    </div>
@endsection
