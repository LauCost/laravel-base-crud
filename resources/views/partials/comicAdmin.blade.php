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
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>

        </tr>

    </thead>

    <tbody>

        <tr>
            <td scope="row">{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->created_at }}</td>
            <td>{{ $comic->updated_at }}</td>
            <td>
                <a href="{{ route('admin.comics.show', $comic->id) }}">View </a>
                <a href="{{ route('admin.comics.edit') }}">Edit </a>
                <a href="">Delete</a>
            </td>

        </tr>

    </tbody>

</table>
