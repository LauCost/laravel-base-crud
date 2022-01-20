@extends('layouts/app')

@section('content')
    <div class="cont flex_wrap">
        <table class="table table-dark table-striped">

            <thead>

                <tr>

                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('admin.comics.edit') }}">Edit</a> Delete
                    </td>

                </tr>

            </tbody>

        </table>
    </div>


@endsection
