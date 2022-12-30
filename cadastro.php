<?php
    include_once('config.php');

    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];
        $data = $_POST['data'];
        $telefone = $_POST['telefone'];

        if (($nome == '') || ($usuario == '') || ($email == '') || ($senha == '') || ($confSenha == '') || ($data == '') || ($telefone == '')) {
            $break = true;
        } else if (filter_var( $email, FILTER_VALIDATE_EMAIL) === false) {
            $flso = false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style_cadastro.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Onisted-Cadastro</title>

</head>
<body>
    <div class="box">
        <form class="form" action="cadastro.php" method="POST">
            <fieldset>
                <legend class="legenda">Cadastro</legend>
                <br>
                <div class="inputBox">
                    <label class="login_label">
                        <span>Nome Completo</span>
                        <input type="text" name="nome" id="nome" class="input" required>
                    </label>
                </div>
                <div class="inputBox">
                    <label class="login_label">
                        <span>Usuário</span>
                        <input type="text" name="usuario" id="usuario" class="input" required>
                    </label>
                </div>
                <div class="inputBox">
                    <label class="login_label">
                        <span>E-mail</span>
                        <input type="email" name="email" id="email" class="input" required>
                    </label>
                </div>
                <div class="inputBox">
                    <label class="login_label">
                        <span>Senha</span>
                        <input type="password" name="senha" id="senha" class="input" required>
                    </label>
                </div>
                <div class="inputBox">
                    <label class="login_label">
                        <span>Confirme Senha</span>
                        <input type="password" name="confSenha" id="confSenha" class="input" required>
                    </label>
                </div>
                <div class="inputBox margem_dataNasc">
                    <span class="dataNasc">Data de Nascimento</span> <br>
                    <input type="date" name="data" id="data" class="input_dataNasc" required>
                </div>
                <div class="inputBox">
                    <label class="login_label">
                        <span>Telefone</span>
                        <input type="tel" name="telefone" id="telefone" class="input" required>
                    </label>
                </div>
                <br>
                <center>
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Cadastrar</button>
                <br>
                <br>
                <a href="login.php" class="link">Já te uma conta? Clique Aqui</a>
                </center>
            </fieldset>
        </form>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/js/script.js"></script>
</body>
</html>