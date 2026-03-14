<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

    <p>Text from de layout(top)</p>
    <hr>
    <!-- apresenta uma secção -->
    @yield('content')

    <hr>
    <p>Text from de layout(bottom)</p>

</body>
</html>
