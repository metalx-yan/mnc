<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelipatan Lima</title>
</head>
<body>
    <h1>Bilangan Kelipatan 5</h1>
@php
    $arr = [];
    for ($i= 1; $i <= 100; $i++) {
        if ( $i % 7 == 0 ) {
            $arr[] = $i.", ";
        }
    }

    echo rtrim(implode('',$arr), ", ");
@endphp


</body>
</html>
