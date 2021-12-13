<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Poppins&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Files in /public/css -->
        <link rel="stylesheet" href='{{ URL::asset("css/global.css") }}'>
        <link rel="stylesheet" href='{{ URL::asset("css/styles.css") }}'>

        <!-- Files in /public/js -->
        <script src='{{ URL::asset("js/main.js") }}'></script>

        <title>Document</title>
    </head>
    <body>
    @yield('content')
    </body>

</html>