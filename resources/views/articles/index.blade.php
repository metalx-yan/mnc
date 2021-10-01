<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('/css/jquery.dataTables.min.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lists Article</title>
</head>
<body>

    <a href="{{ route('article.create') }}">Buat Data</a>

<table id="myTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
            <th>Publish</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->publish_date }}</td>
                <td>
                    <a href="{{ route('article.edit', $item->id) }}">Edit</a>

                    <form action="{{ route('article.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="{{ asset('/js/jquery-3.6.0.min.js') }}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<!-- JavaScript Bundle with Popper -->
<script>
    $(document).ready( function () {
            $('#myTable').DataTable();
        } );
</script>
</body>
</html>
