<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (session('login'))

    {{ 'Ada data dalam session.'}}

    <form action="{{ route('logout.user') }}" method="post">
        @csrf

        <button type="submit">Logout</button>
    </form>
    @else
    {{ 'Tidak ada data dalam session.'}}

    @endif
</body>
</html>
