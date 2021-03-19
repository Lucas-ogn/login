<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body id="tela">
      <h1>Cadastro</h1>
      <form action="/cadastro" method="POST">
        @csrf
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nome de Usuário</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Insira Nome de Usuário"><br>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id ="lastname" name="lastname" placeholder="Sobrenome">
                </div>
              </div>
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu Email">
              <label class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" name="password">
              <label class="form-label">Confirme sua Senha</label>
              <input type="password" class="form-control" id="cpassword" name="cpassword"><br>
              @if(session('msg'))
              <div class="alert alert-danger" role="alert">
                {{session('msg')}}
              </div>
              @endif
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary">Finalizar Cadastro</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </body>
</html>
