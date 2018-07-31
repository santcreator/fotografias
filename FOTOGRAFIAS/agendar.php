<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="text"/>
        <title>Agendamento - JW Fotografias</title>
        <link rel="stylesheet" type="text/css" href="css/agendar.css"/>
        <link rel="shortcut icon" href="icons/jw.ico"/>
    </head>
    <body>
        <!--CONFIG. DE CABEÇALHO-->
        <header id="cabecalho">
            <div class="container">
                <!--CONFIG. TITULOS SMARTS E DESKTOPS-->
                <div class="titulo">
                    <h1><a href="index.php">JW Fotografias<a/></h1>
                    <h2><a href="index.php">JW</a></h2>
                </div>
                <!--CONFIG. MENU DESKTOP-->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a class="marca" href="agendar.php">Agendar</a></li>
                            <li><a href="planos.php">Planos</a></li>
                            <li><a href="mural.php">Mural</a></li>
                            <li><a href="duvidas.php">Dúvidas</a></li>
                            <li><a href="contatos.php">Contatos</a></li>                            
                        </ul>
                    </nav>
                </div>
                <!--CONFIG. MENU SMARTPHONE-->
                <div id="menuSmart" class="smartMenu">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="agendar.php">Agendamentos</a>
                    <a href="planos.php">Planos</a>
                    <a href="mural.php">Mural</a>
                    <a href="duvidas.php">Dúvidas</a>
                    <a href="contatos.php">Contatos</a>
                </div>
                <span class="abrir" onclick="openNav()">&#9776;</span>
                <script>
                    function openNav() {
                        document.getElementById("menuSmart").style.width = "100%";
                    }
                    function closeNav() {
                        document.getElementById("menuSmart").style.width = "0";
                    }
                </script>
            </div>
        </header>
    </body>
</html>        