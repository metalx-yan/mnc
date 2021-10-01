<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bilangan Prima</h1>
@php

    $arr = [];
    for ($i=1; $i <= 100 ; $i++) {
        $prima = 0;
        for ($j=1; $j <= $i ; $j++) {
            if ($i % $j == 0) {
                $prima++;
            }
        }
        if ($prima == 2) {
            $arr[] = $i.", ";
        }
    }
    echo rtrim(implode('', $arr), ", ");
@endphp

</body>
</html>
