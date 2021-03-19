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
        <h1>Login</h1>
        <div class="card" >
            <div class="card-body">
                <form action="/do" method="POST">
                @csrf
                    @if(session('msg2'))
                        <div class="alert alert-success" role="alert">
                            {{session('msg2')}}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">Entrar</button>
                    </div><br>
                    @if(session('msg'))
                        <div class="alert alert-danger" role="alert">
                            {{session('msg')}}
                        </div>
                    @endif
                    <p>Não tem cadastro? </p>
                    <a href="/cadastro">Cadastre-se</a>
                </form>                
            </div>
        </div>
    
    </body>
</html>
