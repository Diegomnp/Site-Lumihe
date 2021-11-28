<?php

$pdo = new PDO('mysql:host=localhost;dbname=cadastro_clientes', 'root', '');

if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?,?,?,?,?,?,?)");

    $sql->execute(array($nome, $sobrenome, $email, $endereco, $complemento, $telefone, $bairro, $cidade, $cep));

    echo  "<script>alert('Cadastro enviado com Sucesso!');</script>";
}

?>

<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro Clientes</title>
</head>

<body>
    <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
        <div class="container-fluid col-11 m-auto">
            <a class="navbar-brand" href="http://127.0.0.1:5500/Index.html">Voltar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand"> | Faça Seu Cadastro - Receba Promoções Excluivas |</a>
                    </li>
                    <li class="nav-item">

            </div>
        </div>
    </nav>
    <br><br><br>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Preencher Casdastro</h4>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="" value="" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" placeholder="" value="" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="email" placeholder="Insira seu e-mail" required>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco" placeholder="Ex. Rua Lumihe, 123" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="complemento" class="form-label">Complemento<span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" name="complemento" placeholder="Bloco / Torre / Apartamento">
                            </div>

                            <div class="col-sm-6">
                                <label for="telefone" class="form-label">Telefone<span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="telefone" placeholder="(11) 99999-9999">
                            </div>

                            <div class="col-md-4">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="bairro" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="cidade" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep" placeholder="Ex. 02990000" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="acao" value="Enviar!">Enviar
                            Cadastro</button>
                        <?php
                        //T_OPEN_TAG_WITH_ECHO 'Cadastro Inserido com Sucesso!';
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <br>
    <footer style="background-color:black;" class="page-footer font-small blue p-3">
        <div class="text-center">
            <a href="https://www.youtube.com/channel/lumihedoces">© 2021 copyright: Código Front End - Equipe
                Univesp Grupo PJI110-0024 - SÃO PAULO - PERA MARMELO - GRUPO - 005.
            </a>

        </div>
    </footer>

</body>