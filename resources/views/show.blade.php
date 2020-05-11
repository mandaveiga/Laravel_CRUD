<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

</head>

<body>
    <h1 class="text-center"> Vizualizar</h1>

    <div class="col-6 m-auto" class="text-center">
        @php
        $user= $book->find($book->id)->relUsers;
        @endphp
        <ul class="list-group">
            <li class=" text-center list-group-item active">Livro {{$book->title}}</li>
            <li class="list-group-item">Paginas: {{$book->pages}}</li>
            <li class="list-group-item">Preço: R${{$book->price}}</li>
            <li class="list-group-item">Autor: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
        </ul>
        <a href="{{url("books")}}">
            <button class="btn btn-link">Voltar</button>
        </a>
    </div>


</html>