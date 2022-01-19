@extends('layouts/app')

@section('content')


    <h1 class="Test_admin">
        Tutti i Comics presenti nel DB
    </h1>

    <div class="cont flex_wrap">

        @foreach ($comics as $comic)

            @include('partials/comic')

        @endforeach
        <a href="{{ route('admin.comics.create') }}">
            <button class="load_series">Create new Comic</button>
        </a>

    </div>

@endsection
