<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilangan Genap</title>
</head>
<body>
    <h1>Bilangan Genap</h1>
@php

    $arr = [];
    for ($l=1; $l <= 100 ; $l++) {
        if ($l % 2 == 0) {
            $arr[] = $l.", ";
        }
    }
    echo rtrim(implode('',$arr), ", ");
@endphp
</body>
</html>
