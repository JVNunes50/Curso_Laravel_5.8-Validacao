<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
    <style>
        body {
            padding: 20px;
        }
    </style>
    <title>Cadastro cliente</title>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-tittle">
                            Cadastro de cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do cliente</label>
                                <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}">
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome') }}
                                    </div>         
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do cliente</label>
                                <input type="number" name="idade" id="idade" placeholder="Idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : ''}}">
                                @if ($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade') }}
                                    </div>         
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do cliente</label>
                                <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}">
                                @if ($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco') }}
                                    </div>         
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do cliente</label>
                                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>         
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>