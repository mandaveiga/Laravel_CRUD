<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autor</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

</head>

<body>
    <h1 class="text-center m-2">Cadastrar Autor</h1>

    <div class="col-6 m-auto " class="text-center">
        <form name="formCad" id="formCad" method="post" action="{{url('autor')}}">
            @csrf
            <input class="form-control m-2" type="text" required name="name" id="name" placeholder="Nome">

            <input class="form-control m-2" type="text" required name="email" id="email" placeholder="Email">
            <input type="password" class="form-control m-2" required name='password' placeholder="Senha">
            <input class="btn btn-success m-2" type="submit" value="Cadastrar">
        </form>
        <a href="{{url("books/create")}}">
            <button class="btn btn-link">Voltar</button>
        </a>

    </div>
</body>

</html>