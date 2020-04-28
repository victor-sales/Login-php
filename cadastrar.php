<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="card card-principal">
                <div class="card-header">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="card-body">
                    <form action="db/control_cadastro.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="senha" id="senha" placeholder="Crie uma senha forte">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="confirmar-senha" id="confirmar-senha" placeholder="Confirme sua senha">
                        </div>
                        <hr>
                        <div class="form-group botao-cadastrar">
                            <button class="btn btn-primary btn-lg" type="submit">Cadastar-me</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>