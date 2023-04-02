<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO - IDADE</title>
</head>
<body>
        @if($year == $today->format('Y') && $month == $today->format('m') && $day==$today->format('d'))
            <p>Você não pode ter nascido agora... não é mesmo??? 🤨🤨</p>
        @elseif($day == null && $month == null)
            <p>Você tem exatamente: {{$today->format('Y') - $year}} anos</p>
        @elseif($day == null)
            <p>Você tem exatamente: {{$today->format('Y') - ($year + 1)}} anos {{($month + 3)- $today->format('m')}}</p>
        @else
            <p>Você tem exatamente: {{$today->format('Y') - ($year + 1)}} anos {{($month + 3)- $today->format('m')}} meses e {{($day + 19)- $today->format('d')}} dias!</p>
        @endif
</body>
</html>