<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segitiga Siku Siku</title>
</head>
<body>
    <h1>Segitiga Siku Siku</h1>
    @php
        for ($i=1; $i <=5 ; $i++) {
            for ($j=1; $j <= $i ; $j++) {
                echo  "X";
            }
            echo  "<br>";
        }
    @endphp
</body>
</html>
