<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
</head>
<body>
    <form action="{{ route('article.store') }}" method="post">
        @csrf
            <table>
                <tr>
                    <td>
                        <label for="">Title</label>
                    </td>
                    <td>
                        <input type="text" name="title"  {{ $errors->has('title') ? 'is-invalid' : ''}}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Description</label>
                    </td>
                    <td>
                        <input type="text" name="description"  {{ $errors->has('description') ? 'is-invalid' : ''}}" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Content</label>
                    </td>
                    <td>
                        <textarea name="content" id="" cols="30" rows="10" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Publish Date</label>
                    </td>
                    <td>
                        <input type="date" name="publish_date"  {{ $errors->has('publish_date') ? 'is-invalid' : ''}}" required>
                    </td>
                </tr>
            </table>


            <br>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a href="{{ route('article.index') }}" class="btn btn-warning btn-sm">Back</a>
    </form>
</body>
</html>
