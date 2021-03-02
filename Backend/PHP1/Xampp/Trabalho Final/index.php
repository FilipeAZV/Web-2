<!DOCTYPE html>
<html lang="pt-br">

<!--Abrindo Head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="Bootstrap/bootstrap-reboot.css" rel="stylesheet">
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
    <link href="CSS/trabalho7.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&display=swap" rel="stylesheet">


    <title>HQ World</title>
    <link rel="shortcut icon" href="https://guilds.gw2w2w.com/guilds/sword-art-online-gilde/256.svg" type="link">
    <!--Fechando Head-->
</head>

<!--Abrindo Body-->

<body>
    <?php
        if (isset($_SESSION['id'])) {
        ?>
        <p><a href="controleUsuario.php"><?= $_SESSION['nome'] ?></a></p>
        <?php
    
        } else {
        ?>
        <p><a href="login.html">Login</a></p>
        <?php
        }
    ?>
    <!--inserindo formulário no modal-->
    <section class="container">
        <!--Abrindo Nav-->
        <nav class="navbar navbar-expand-lg navbar-collapse badge-light">
            <a class="navbar-brand" style="color:black" href="#">
                <img src="img/logo.jpg" width="70" height="55" class="d-inline-block align-top" alt=""><br>HQ World
            </a>
            <div class="barra" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" style="color:black" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" style="color: black" href="#">Quadrinhos</a>
                    </li>
                        <?php
                            if (isset($_SESSION['id'])) {
                                ?>
                                 <li class="nav-item active">
                                <p><a class="nav-link" style="color: black" href="controleUsuario.php"><?= $_SESSION['nome'] ?></a></p>
                                </li>
                                <?php

                        } else {
                            ?>
                             <li class="nav-item active">
                            <a class="nav-link" style="color: black" href="login.html">Login</a>
                            </li>
                            <?php
                        }
                        ?>
                    <li class="nav-item active">
                        <a class="nav-link" style="color: black" href="cadastro_tela.php">Cadastro</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--Fechando NAV-->
        <!--Abrindo Header-->
        <header>
            <!--Banner do site-->
            <div class="banner">
                <img src="img/banner.jpg" width="1110px" height="600px">
            </div>
            <!--Fechando Banner do site-->
        </header>
        <!--Fechando Header-->
        <!--abrindo o article-->
        <article>

            <h2>Quadrinhos</h2>

            <!DOCTYPE html>
            <html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="CSS/cadastro.css">
            </head>

</body>

</html>

<ul class="list-unstyled">
    <li class="media">
        <img class="mr-3" src="https://cdn.ome.lt/9F5KuAHvKaNKhzgGlf-aOtCo9vs=/fit-in/1070x750/smart/filer_public/04/b5/04b5d633-f354-44e4-a825-425677e77132/1.jpg" height="300" width="200">
        <div class="media-body">
            <h3 class="mt-0 mb-1">O Espetacular Homen Aranha: Renove seus votos | Volume 1</h3>

            <p>Sinopse:</p>

            <p>A vida não está nada má para a família Parker! Peter agora divide suas responsabilidades de manter a cidade de Nova York segura com sua esposa Mary Jane e, meio a contragosto, é verdade, com sua filha Annie.
                Porém, o Amigão da Vizinhança vai precisar de toda a ajuda possível para deter os supervilões que assolam a cidade, inclusive alguns de seus velhos inimigos e uma terrível ameaça vinda do subterrâneo.</p>
            <h1>R$25,00</h1>
            <button class="bt bt-vd" href="#">Comprar</button>

        </div>
    </li>

    <li class="media my-4">
        <img class="mr-3" src="http://www.comix.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/2/120260_900x900.jpg" height="300" width="200">
        <div class="media-body">
            <h3 class="mt-0 mb-1">Arlequina | Volume 22</h3>

            <p>Sinopse:</p>

            <p>A Princesa Palhaça do Crime está de voltar e querendo comemorar! Só que quando a Arlequina dá uma festa, pode ter certeza de que será um estouro. Não. é sério! Com explosões mesmo. E desta vez a vítima pode
                ser todo o Universo D
            </p>
            <h1>R$40,00</h1>
            <button class="bt bt-vd" href="#">Comprar</button>

        </div>

    <li class="media my-4">
        <img class="mr-3" src="https://img.wook.pt/images/deadpool-mata-o-universo-marvel-cullen-bunn/MXwyMjA5ODA4N3wxNzk2OTc1NnwxNTMwNDg2MDAwMDAw/350x" height="300" width="200">
        <div class="media-body">
            <h3 class="mt-0 mb-1">Deadpool Mata o Universo Marvel | Volume único</h3>

            <p>Sinopse:</p>

            <p>E se tudo o que vocês acham que é cómico acerca do Deadpool fosse na verdade apenas... perturbador? Inquietante e bizarro? E se ele decidisse matar tudo e todos que compõem o universo Marvel? Pior, e se
                ele conseguisse? Vocês achariam isso cómico? As aventuras do Mercenário Desbocado vão ganhar um tom ainda mais negro e surreal, quando ele começa a perseguir super-heróis e supervilões com um único propósito:
                matá-los, numa saga de horror como nenhuma outra! Escrita por Cullen Bunn (Harrow County, Venom) e desenhada por Dalibor Talajic (X-Men), Deadpool Mata o Universo Marvel foi um dos maiores sucessos da
                Marvel e é o primeiro de uma série de volumes em que Deadpool procura eliminar o seu universo super-heróico de uma vez por todas.
            </p>
            <h1>R$50,00</h1>
            <button class="bt bt-vd" href="#">Comprar</button>
        </div>

    <li class="media">
        <img class="mr-3" src="https://cdn.awsli.com.br/600x700/579/579849/produto/49130420/e9b4e34e65.jpg" height="300" width="200">
        <div class="media-body">
            <h3 class="mt-0 mb-1">Batman: Os pecados do pai | Volume único</h3>

            <p>Sinopse:</p>

            <p>Alguém está matando pessoas associadas ao Asilo Arkham durante a época em que Thomas Wayne estava internando pessoas à força. A suspeita recai sobre as famílias que estão processando Bruce Wayne
                para que ele pague pelo mal causado por seu pai, o que o faz se tornar alvo de um assassino implacável. É um jogo mortal de gato e rato em que Batman tenta evitar que o Pistoleiro mate antigos
                funcionários do Asilo Arkham, ao mesmo tempo que busca descobrir quem é ele e por que ele está por trás dessas mortes.</p>
            <h1>R$36,00</h1>
            <button class="bt bt-vd" href="#">Comprar</button>
        </div>
    </li>
    </li>
</ul>
</div>
</article>

<br>

<footer>
    <br>
    <br>
</footer>

</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</body>
<!--Fechando Body-->

</html>