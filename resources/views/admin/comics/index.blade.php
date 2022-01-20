@extends('layouts/app')

@section('content')

    <main class="admin_main ">

        <h1 class="">
            Tutti i Comics presenti nel DB
        </h1>

        <div class="cont flex_wrap">

            @foreach ($comics as $comic)

                @include('partials/comicAdmin')

            @endforeach
            <a href="{{ route('admin.comics.create') }}">
                <button class="load_series">Create new Comic</button>
            </a>

        </div>

    </main>

@endsection
