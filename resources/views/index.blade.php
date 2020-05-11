<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

</head>

<body>
    <div class="d-flex justify-content-center">
        <h1 class="p-1 bd-highlight">Livros</h1>
        <a class="p-2 bd-highlight" href=" {{url('books/create')}}">
            <button class="btn btn-success p-2 bd-highlight">Cadastrar</button>
        </a>
    </div>
    <div class="col-7 m-auto" class="text-center">
        @csrf
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $books)
                @php
                $user=$books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td> R${{$books->price}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("books/$books->id/edit")}}"">
                            <button class=" btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("books/$books->id/del")}}"">
                            <button class=" btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>