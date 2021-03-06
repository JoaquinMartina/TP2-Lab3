<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TP2-LabIII</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .title2 {
            font-size: 70px;
        }

        .title3 {
            font-size : 30px;
            color: #3d62f5;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="top-right links">
        <a href="{{ url('/products/all') }}">Productos</a>
    </div>

    <div class="content">
        <div class="title m-b-md">Laboratorio de Computación III</div>

        <div class="title2 m-b-md">Trabajo Practico 2</div>

        <div class="title3 m-b-md"><strong>Alumno:</strong> Martina, Joaquín</div>
    </div>
</div>
</body>
</html>
