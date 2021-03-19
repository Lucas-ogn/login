<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body id="tela">
        <h1>Perfil</h1>
        <div class="card">
            <div class="card-body">
                <form action="/perfil/update" method="POST">
                    @csrf
                    @method('PUT')
                    @if(session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{session('msg')}}
                        </div>
                    @endif
                    <label class="form-label fw-bold">Nome de Usuário:</label>
                    <input type="text" class="form-control" id="username" name="username" value={{Auth::user()->username}}><br>
                    <div class="row">
                        <div class="col">
                            <label class="form-label fw-bold">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" value={{Auth::user()->name}}>
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold">Sobrenome</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value={{Auth::user()->lastname}}>
                        </div>
                    </div><br>
                    <label class="form-label fw-bold">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value={{Auth::user()->email}}> <br>
                    <label class="form-label fw-bold">Alterar Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite a nova senha"><br>
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                    <a href="/logout" class="btn btn-outline-warning">Sair</a>
                </form><br>
                <form action="/perfil/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger delete-btn">Deletar perfil</button>
                </form>
            </div>
        </div>
    </body>
</html>
