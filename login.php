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

<!--layout login-->
<style>
body {font-family: "Dancing Script", sans-serif; font-size: 25px;}



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #C71585;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #C71585;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  margin-top: 200px;

}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>

<body style="background-image: url(img/borrado.png);">

    <!--área menu-->

    <nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: #C71585;">
        <a class="navbar-brand" href="index.html"> <img src="img/marybru_logo-removebg-preview.png" width="70" height="70"> </a>
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

            <a href="https://web.whatsapp.com/send?phone=5511989453886" target="_blank" title="whatsapp ícones"> <img src="img/whatsapp.png" width="30" height="30" style="margin-left: 180px; margin-top: 10px;"></a>
            <a href="https://www.instagram.com/marybru.docuras/?__coig_restricted=1" title="instagram ícones"> <img src="img/instagram (2).png" width="30" height="30" style="margin-left: 15px; margin-top: 10px;"></a>
        </div>
    </nav>

            <!--área login-->

            <h2>Formulário Login</h2>

            <form action="logar.php" method="POST">
              <div class="imgcontainer">
                <img src="img/usuario2.png" alt="Avatar" class="avatar">
              </div>
            
              <div class="container">
                <label for="uname"><b>Usuário</b></label>
                <input type="email" placeholder="Seu email" name="email" required>
            
                <label for="psw"><b>Senha</b></label>
                <input type="password" placeholder="Sua senha" name="senha" required>
                    
                <button type="submit" name="Enviar">Login</button>
              </div>
            
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn"><a href="cadastro.html"> Cadastrar </a></button>
                
              </div>
            </form>

        </div>
    </div>

    <!--área rodapé-->

    <footer>

        <p id="confeitaria">MaryBru Doçuras feito com amor & chocolate!</p>
        <p>&copy; feito por Lumière Soluções</p>
        <a rel="nofollow" target="_blank" href="https://web.whatsapp.com/send?phone=5511989453886" class="item-link"> <img src="img/whatsapp.png" width="30" height="30" style="margin-left: 10px;"></a>
        <a href="https://www.instagram.com/marybru.docuras/?__coig_restricted=1" title="instagram ícones"> <img src="img/instagram (2).png" width="30" height="30" style="margin-left: 10px;"></a>

    </footer>


</body>
</html>