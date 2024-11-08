<?php
require_once '../Php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sobre Nós 🧥</title>

    <link rel="stylesheet" href="../Css/StylePerfil.css">
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

        <div class="sideN">
            <a class="tablinks" onclick="replaceConf(event, 'Dados')">Dados</a>
            <a class="tablinks" onclick="replaceConf(event, 'Historico')">Historico</a>
            <a class="tablinks" onclick="replaceConf(event, 'Carrinho')">Carrinho</a>
        </div>

        <div id="Dados" class="tabcontent">
            <h3>Dados</h3>
            <p>de 6 lados ou de 20?.</p>
            <input type="checkbox">
            <select>
            <option>awa</option>
            <option>owo</option>
            </select>
        </div>

        <div id="Historico" class="tabcontent">
            <h3>Historico de compras</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aliquam dolorum quam quos et necessitatibus nemo laboriosam doloremque asperiores ad, maxime exercitationem perspiciatis nihil voluptatem porro. Itaque, vero? Ab, reprehenderit.</p>
        </div>

        <div id="Carrinho" class="tabcontent">
            <h3>Carrinho</h3>
            <div id = "carro">

            </div>
            <button id="carrinho" type="button"><p>Continuar para o pagamento.</p></button>
        </div>
        <footer>
            <p><a href="#">awa</a></p>
        </footer>
    </div>
    <script src="../JS/All.js">
    </script>

    <?php require '../Php/Profile.php';?>
</body>
</html>