<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <h1 class="text-center m-2">Cadastrar</h1>
    <div class="col-6 m-auto" class="text-center d-flex">

        @if(isset($errors) && count($errors)>0)
        <div class='text-center mt-4 mb-4 p-2 alert-danger'>
            @foreach($errors->all() as $erro)
            {{$erro}}<br>
            @endforeach
        </div>
        @endif

        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control m-2" type="text" required name="title" id="title" placeholder="Titulo">

            <div class="input-group m-2">
                <select id="opt-autor" class="form-control" required name="id_user" id="id_user">
                    <option value="">Selecione um autor</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <a href=" {{url('autor/create')}}">
                        <button class="btn btn-outline-dark" type="button" id="button-addon2">novo</button>
                    </a>
                    <button id="btn-excluir" class="btn btn-outline-danger" type="button">excluir</button>
                </div>
            </div>

            <input class="form-control m-2" type="text" required name="pages" id="pages" placeholder="Paginas">
            <input class="form-control m-2" type="text" required name="price" id="price" placeholder="Preço ">
            <input class="btn btn-success m-2" type="submit" value="Cadastrar">

        </form>
        <a href="{{url("books")}}">
            <button class="btn btn-link">Voltar</button>
        </a>
    </div>
    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>

</html>