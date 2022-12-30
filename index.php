<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Onisted</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top padding-20 bg-header">
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mrg-5-left">Onisted</a>

                <a class="navbar-brand mrg-450-left" href="#">Home</a>
                <a class="navbar-brand mrg-30-left" href="#">Adicionar Tarefas</a>
                <a class="navbar-brand mrg-30-left" href="#">Mostrar Tarefas</a>
                <a class="navbar-brand mrg-30-left" href="#">Cadastro/Login</a>
                <a class="navbar-brand mrg-30-left" href="#">Perfil</a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Onisted</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <figure class="figure-principal">
            <img class="img-principal" src="./src/imgs/principal.png" alt="">
        </figure>

        <div class="meio">
            <h1 class="center underline">Organize suas tarefas do <br> dia a dia</h1>
        </div>
        
        <div class="display mrg-200-left mrg-200-right">
            <div class="lado">
                <figure>
                    <img class="imagem-2" src="./src/imgs/principal.png" alt="">
                </figure>
            </div>

            <div class="lado">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nemo culpa sapiente vero? Commodi ratione ex ab sed nemo praesentium, hic temporibus in nesciunt quas dolorum cum, maiores tempore architecto!
                </p>
            </div>
        </div>

        <div class="newsletter">
            <p class="center uppcaser bold-900 size-2_5vh">
                Se inscreva na nossa newsletter <br> para receber as novidades
            </p>
            <br>
            <center>
                <input type="text">
                <button>Cadastrar</button>
            </center>
        </div>

        <div class="contatos">
            <h2 class="center uppcaser underline">Entre em contato</h2>
            <p class="bold-700 center size-2vh">onistedtarefas@gmail.com</p>
        </div>
    </main>

    <footer>
        <button>
            <!-- Botão para Voltar ao top -->
        </button>
        <p>Siga-nos:</p>
        <ul>
            <li>
                <a href="">
                    <!-- Imagem Facebook -->
                </a> 
            </li>
            <li>
                <a href="">
                    <!-- Imagem Instagram -->
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Imagem TikTok -->
                </a>
            </li>
        </ul>
        <p>@Copy</p>
        
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/js/script.js"></script>
</body>
</html>