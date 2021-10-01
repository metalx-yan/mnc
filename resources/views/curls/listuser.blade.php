<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Curl - List User</title>
</head>
<body>
    <h1>List User (Curl)</h1>
<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Photo Profile</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($output['data'] as $data)
        <tr>
            <td>{{ $data['first_name'] }}</td>
            <td>{{ $data['last_name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td><img src="{{ $data['avatar'] }}" alt=""></td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
