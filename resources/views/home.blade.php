@extends('layouts/app')

@section('page-title', 'home page')

@section('content')

    <h1>Welcome to dc comics</h1>

    <div class="cont flex_wrap">

        {{-- @foreach ($comics as $comic)

            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                <p>{{ $comic->title }}</p>
            </div>

        @endforeach --}}

        <button class="load_series">LOAD MORE</button>
    </div>

@endsection
