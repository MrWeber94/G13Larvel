<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3> {{ $title }}</h3>
    <p>




        @foreach ($STDdata as $key => $value)
            {!! '* . ' . $key . ' : ' . $value . '<br>' !!}
        @endforeach





    </p>

</body>

</html>
