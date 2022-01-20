@extends('layouts/app')

@section('content')
    <main>

        <div class="cont flex_wrap">

            @foreach ($comics as $comic)

                @include('partials/comic')

            @endforeach

            <button class="load_series">LOAD MORE</button>
        </div>

    </main>

@endsection
