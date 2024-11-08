<?php
require_once '../Php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Produtos 🧥</title>

    <link rel="stylesheet" href="../Css/StyleP.css">
</head>

<body>
    
    <header>
        <ul id="ul">
            <li class="active"><a href="../Html/Home.php">Inicio</a></li>
            <li><a href="../Html/Produtos.php">Produtos</a></li>
            <li><a href="../Html/Sobre.php">Sobre</a></li>
            <li class="login-button"><a href="../Html/Entrar.php" id="login">Entrar</a></li>
        </ul>
    </header>

    <div class="FocoHome">
        <div class="produtos">
            <div class="PesquisaP">
                <header id="pesq">
                    <ul id="filtros">
                        <label>Filtrar por:</label>
                        <select>
                            <option value="/" selected disabled hidden>Filtros</option>
                            <option value="/">Marca1</option>
                            <option value="/">Cor Principal</option>
                        </select>
                    </ul>
                    <div class="searchbar-container">
                        <input id="search-input" type="search" placeholder="Pesquise..." />
                        <button id="search-button" type="button">
                            <i class="fa fa-search" ></i>
                        </button>
                    </div>
                </header>
            </div>

            <div id="imgs">
                <div class="exemploMoletons">
                    <div class="conteudo">
                        <a>
                        <img id="mV" class="moletom" src="../Rsc/moletomVerde.webp" alt="Moletom Verde">
                        </a>
                        <h4>Moletom Verde</h4>
                        <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                    </div>
                </div>
                <div class="exemploMoletons">
                    <div class="conteudo">
                        <a>
                        <img id="mC" class="moletom" src="../Rsc/moletomSCapuz.webp" alt="Moletom Comum">
                        </a>
                        <h4>Moletom Preto</h4>
                        <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                    </div>
                </div>
                <div class="exemploMoletons">
                    <div class="conteudo">
                        <a>
                        <img id="mB" class="moletom" src="../Rsc/moletomBranco.webp" alt="Moletom Branco">
                        </a>
                        <h4>Moletom Branco</h4>
                        <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p><a href="#">awa</a></p>
        </footer>
    </div>

</body>   
    <script src="../JS/All.js">
        Prod();
    </script>
</html>