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
    <footer>
        <div class="github">
            <a href="https://github.com/joaomarcusjesus" target="_blank"><img src="assets/img/git.jpg"></a>
        </div>
    </footer>
</div>
</body>
</html>
