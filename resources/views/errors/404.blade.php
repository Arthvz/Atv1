<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada!</title>
</head>
<body>
    @extends('errors::minimal')

    @section('title', __('404 - Página não encontrada!'))
    @section('code', '404 😨')
    @section('message', __('Página não encontrada! 🥸'))
</body>
</html>
