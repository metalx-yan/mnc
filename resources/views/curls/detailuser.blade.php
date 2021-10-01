<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Curl - Detail User</title>
</head>
<body>
    <h1>Detail User (Curl)</h1>
<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Photo Profile</th>
            <th>URL</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $output['data']['first_name'] }}</td>
            <td>{{ $output['data']['last_name'] }}</td>
            <td>{{ $output['data']['email'] }}</td>
            <td><img src="{{ $output['data']['avatar'] }}" alt=""></td>
            <td><a href="{{ $output['support']['url'] }}" target="_blank">Link</a></td>
            <td>{{ $output['support']['text'] }}</td>
        </tr>
    </tbody>
</table>

</body>
</html>
