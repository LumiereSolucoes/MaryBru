﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaryBru Doçuras</title>
    <!--links bootstrap/css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!--fonte letra menu-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--imagem link-->
    <link rel="icon" type="image/png" href="img/marybru_logo-removebg-preview.png">
    <!--responsividade-->

</head>

<body>

    <!--área menu-->

    <nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: #C71585;">
        <a class="navbar-brand" href="index.html" style="width: 55px;"> <img src="img/marybru_logo-removebg-preview.png" width="70" height="70" alt="Logo Marybru Doçuras"> </a>
        <a id="mb" class="navbar-brand" href="index.html">MaryBru Doçuras</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul id="links" class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Página inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrenos.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos online</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.html">Contato</a>
                </li>
            </ul>
            <!--whatsapp e instagram-->

            <a href="https://web.whatsapp.com/send?phone=5511989453886" target="_blank" title="whatsapp ícones"> <img src="img/whatsapp.png" width="30" height="30" style="margin-top: 10px;" alt="Whatsapp"></a>
            <a href="https://www.instagram.com/marybru.docuras/?__coig_restricted=1" title="instagram ícones"> <img src="img/instagram (2).png" width="30" height="30" style="margin-left: 15px; margin-top: 10px;" alt="Instagram"></a>
        </div>
    </nav>

            <!--área login-->
    <div class="container login">
        <form action="logar.php" method="POST">
            <br />
            <div class="imgcontainer">
                <img src="img/usuario2.png" alt="Avatar" class="avatar">
            </div><br />
            <h2 name="2"  id="titulo">Login</h2><br>
            <label for="uname"><b>Email</b></label><br />
            <input type="text" placeholder="Seu email" name="email" required><br />
            <label for="psw" type="password"><b>Senha</b></label><br />
            <input type="password" placeholder="Sua senha" name="senha" required>
            <br />
            <button type="submit" name="Enviar" id="Enviar">Login</button>


            <br />Não possui uma conta? <a href="cadastro.html">Cadastre-se</a>


        </form>


    </div>
   

    <!--área rodapé-->

    <footer>

        <p id="confeitaria">MaryBru Doçuras feito com amor & chocolate!</p>
        <p>&copy; feito por Lumière Soluções</p>
        <a rel="nofollow" target="_blank" href="https://web.whatsapp.com/send?phone=5511989453886" class="item-link"> <img src="img/whatsapp.png" width="30" height="30" style="margin-left: 10px;" alt="Whatsapp"></a>
        <a href="https://www.instagram.com/marybru.docuras/?__coig_restricted=1" title="instagram ícones"> <img src="img/instagram (2).png" width="30" height="30" style="margin-left: 10px;" alt="Instagram"></a>

    </footer>


</body>
</html>