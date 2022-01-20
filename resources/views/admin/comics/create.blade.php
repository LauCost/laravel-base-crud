@extends('layouts.app')

@section('content')

    <div class="container p-5">
        <h1 class="Test_admin">
            Create a new Comic
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.comics.store') }}" method="post">

            @csrf

            <div class="mb-3">

                <label for="title" class="form-label">Titolo fumetto</label>

                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    aria-describedby="titleHelper" placeholder="Scrivi qui il titolo del fumetto"
                    value="{{ old('title') }}">
                @error('title')

                    <div class="alert alert-danger">{{ $message }}</div>

                @enderror

            </div>

            <div class="mb-3">

                <label for="description" class="form-label">Descrizione</label>

                <textarea name="description" id="description" rows="3" class="form-control">
                            {{ old('description') }}
                        </textarea>

            </div>

            <div class="mb-3">

                <label for="thumb" class="form-label">Link immagine</label>

                <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHelper"
                    placeholder="Incolla il link dell'immagine" value="{{ old('thumb') }}">

            </div>

            <div class="mb-3">

                <label for="price" class="form-label">Prezzo</label>

                <input type="text" name="price" id="price" class="form-control" aria-describedby="priceHelper"
                    placeholder="Scrivi qui il prezzo" value="{{ old('price') }}">

            </div>

            <div class="mb-3">

                <label for="series" class="form-label">Serie Fumetto</label>

                <input type="text" name="series" id="series" class="form-control" aria-describedby="seriesHelper"
                    placeholder="Scrivi qui la serie del fumetto" value="{{ old('series') }}">

            </div>

            <div class="mb-3">

                <label for="sale_date" class="form-label">Data di uscita</label>

                <input type="text" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" aria-describedby="sale_dateHelper"
                    placeholder="Indicare la data nel formato YYYY-MM-DD" value="{{ old('sale_date') }}">

                @error('sale_date')

                    <div class="alert alert-danger">{{ $message }}</div>

                @enderror

            </div>

            <div class="mb-3">

                <label for="type" class="form-label">Tipologia di fumetto</label>

                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                    aria-describedby="typeHelper" placeholder="Scrivi qui la tipologia di fumetto"
                    value="{{ old('type') }}">

                @error('type')

                    <div class="alert alert-danger">{{ $message }}</div>

                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>

@endsection
