<!DOCTYPE html>
<html>
<head>
    <title>Laravel is power</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap\dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="title">Todas as rotas => endpoint /apirest</div>
    </div>
    <div class="rotas">
        @foreach($rotas as $prefix => $rota)
            <div class="well">
                {{$prefix . " | "}}
                {{$rota}}
            </div>
        @endforeach
    </div>
    <div class="well">
        <p><b>Comandos do Artisan:</b><br></p>
        <span>php artisan <b>migrate</b> => gerar as migrations da _database <br></span>
        <span> php artisan <b>db:seed</b> => gerar os dados "fakers" do _database <br></span>
        <span>php artisan <b>serve</b> => abrir o servidor embutido do artisan <br><br></span>
        <span style="font-size: 20px;">Para testes com requisições, usem uma ferramenta chamada Postman ou o SOAP do java</span>
    </div>
    <footer style="text-align: center;">
        <div class="github">
            <a href="https://github.com/joaomarcusjesus" target="_blank"><img src="assets/img/git.jpg"></a>
        </div>
        <div class="name">João Marcus</div>
    </footer>
</div>
</body>
</html>
