<?php
require_once '../Php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login 🧥</title>

    <link rel="stylesheet" href="../Css/StyleE.css">
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
            <input id="search-input" type="search" placeholder="Pesquise..." />
            
            <button id="search-button" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </header>

    <div class="FocoHome">
        <h1 id="lorem">
           Entrar
        </h1>

        <div class="BL">
            <div class="SubL">
                <form action="../Php/Login.php" method="POST">
                    <label>Nome de Usuário:</label>
                    <input type="text" name="user"><br><br>
                    <label>Senha:</label>
                    <input type="text" name="pass"><br><br>
                    <input type="submit" class="sub" name="submit" value="Entrar">
                    <a href="../Html/Inscrever-se.php">Inscrever-se</a>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p><a href="#">awa</a></p>
        
    </footer>
    
    <script src="../JS/All.js">
    </script>
    <?php 
    require "../Php/Login.php";
    ?>
</body>
</html>