<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link rel="shortcut icon" href="/oficial/assets/img/fiveicon13.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta</title>
</head>
<body>
<div>
<center>
<img src="{{public_path('/oficial/assets/img/esse.png')}}" alt="Logotipo">



</center>

<h1>O(a) formador(a) {{ $user['name'] }}, de email {{$user['email']}} solicita o seguinte valor </h1>

<p>
    {{$user['valor_retirado']}} Kz
</p>

<br>

<hr>
Email enviado em {{date('d/m/Y H:i:s')}}

</div>
</body>
</html>