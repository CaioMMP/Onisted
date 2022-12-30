<?php
    session_start();
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
        <form class="form" action="validarLogin.php" method="POST">
            <fieldset>
                <legend class="legenda">Login</legend>
                <br>
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
                <br>
                <center>
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Entrar</button>
                <br>
                <br>
                <a href="cadastro.php" class="link">Não tem uma conta? Clique Aqui</a>
                </center>
            </fieldset>
        </form>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/js/script.js"></script>
</body>
</html>