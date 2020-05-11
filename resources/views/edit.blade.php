<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

</head>

<body>
    <h1 class="text-center m-2">Editar Livro</h1>
    <div class="col-6 m-auto" class="text-center d-flex">

        @if(isset($errors) && count($errors)>0)
        <div class='text-center mt-4 mb-4 p-2 alert-danger'>
            @foreach($errors->all() as $erro)
            {{$erro}}<br>
            @endforeach
        </div>
        @endif

        <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
            @method('PUT')
            @csrf
            <input class="form-control m-2" type="text" required name="title" id="title" value="{{$book->title}}" placeholder="Titulo">


            <select class="form-control m-2" required name="id_user" id="id_user">
                <option value="{{$book->relUsers->id}}">{{$book->relUsers->name}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>



            <input class="form-control m-2" type="text" required name="pages" id="pages" value="{{$book->pages}}" placeholder="Paginas">
            <input class="form-control m-2" type="text" required name="price" id="price" value="{{$book->price}}" placeholder="Preço ">
            <input class="btn btn-success m-2" type="submit" value="Salvar">

        </form>

        <a href="{{url("books")}}">
            <button class="btn btn-link">Voltar</button>
        </a>

    </div>
</body>

</html>