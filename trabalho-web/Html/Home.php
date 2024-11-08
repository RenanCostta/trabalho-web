<?php
require_once '../Php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Moletons 🧥</title>

    <link rel="stylesheet" href="../Css/Styles.css">
</head>

<body>
    
    <header>
        <ul id="ul">
            <li class="active"><a href="../Html/Home.php">Inicio</a></li>
            <li><a href="../Html/Produtos.php">Produtos</a></li>
            <li><a href="../Html/Sobre.php">Sobre</a></li>
            <li class="login-button"><a href="../Html/Entrar.php" id="login">Entrar</a></li>
        </ul>

        <div class="searchbar-container">
            <input id="search-input" type="search" placeholder="Pesquise..." value="">
            
            <button id="search-button" type="button" onclick="setCookie('pesq', document.getElementById('search-input').value)">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </header>

    <div class="slideshow-container">

    <div class="mySlides fade">
    <img src="../Rsc/dark.png" style="width:100%">
    </div>

    <div class="mySlides fade">
    <img src="../Rsc/snow.png" style="width:100%">
    </div>

    <div class="mySlides fade">
    <img src="../Rsc/water.png" style="width:100%">
    </div>

    </div>
    <script src="../JS/All.js">
    </script>
    
    <div class="FocoHome">
        <h1 id="lorem">
           Os Melhores Moletons Do Mundo
        </h1>
        <h3 id ="linguiça">
            Moleton Moleton Moleton Moleton Moleton Moleton Moleton Moleton 
        </h3>

        <div class="imgs">
            <div class="exemploMoletons">
                <div class="conteudo">
                    <img class="moletom" src="../Rsc/moletomVerde.webp" alt="Moletom Verde" onclick="repl()">
                    <h4>Moletom Verde</h4>
                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                </div>
            </div>
            <div class="exemploMoletons">
                <div class="conteudo">
                    <img class="moletom" src="../Rsc/moletomSCapuz.webp" alt="Moletom Comum" onclick="repl()">
                    <h4>Moletom Preto</h4>
                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                </div>
            </div>
            <div class="exemploMoletons">
                <div class="conteudo">
                    <img class="moletom" src="../Rsc/moletomBranco.webp" alt="Moletom Branco" onclick="repl()">
                    <h4>Moletom Branco</h4>
                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                </div>
            </div>
        </div>

        <footer>
            <p><a href="#">awa</a></p>
        </footer>
    </div>

    <?php 
    require "../Php/Home.php";
    ?>
</body>
</html>