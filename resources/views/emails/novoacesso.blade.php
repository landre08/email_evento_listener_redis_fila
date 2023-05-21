<html>

<head>
    <title>Meu E-mail</title>
</head>
<body>
    <h4>Seja bem vindo(a), {{ $nome }}</h4>

    <p>Você acabou de acessar o sistema utilizando o seu e-mail: {{ $email }}</p>
    <p>Data/Hora de acesso:{{ $datahora }} </p>

    <div>
        <img width="40%"
             height="40%"
             src="{{ $message->embed(public_path().'/img/laravelimg.png') }}" >
    </div>
</body>
</html>
