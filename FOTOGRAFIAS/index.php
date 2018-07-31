<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="text"/>
        <title>JW Fotografias</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" href="icons/jw.ico"/>
    </head>
    <body>
        <!--CONFIG. DE CABEÇALHO-->
        <header id="cabecalho">
            <div class="container">
                <!--CONFIG. TITULOS SMARTS E DESKTOPS-->
                <div class="titulo">
                    <h2><a href="index.php">JW</a></h2>
                </div>
                <!--CONFIG. MENU DESKTOP-->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a class="marca" href="index.php">Home</a></li>
                            <li><a href="agendar.php">Agendar</a></li>
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
            <!--CONFIG. DA LOGO MARCA-->
            <div class="logo">
                <img src="icons/logo.svg" alt="logo marca"/>
                <h1>JW Fotografias</h1>
            </div>
        <!--CONFIG. DOS BTNS-->
            <section id="btns">
                <div class="ctn borda-dir">
                    <div class="img-btn">
                        <a href="#"><img src="icons/planos.svg" alt="planos"/></a>
                        <a href="#"><img class="borda-top" src="icons/agendar.svg" alt="Agendamentos"/></a>
                    </div>
                </div>
                <div class="ctn">
                    <div class="img-btn">
                        <a href="#"><img src="icons/portfolio.svg" alt="portfolio"/></a>
                        <a href="#"><img class="borda-top" src="icons/duvidas.svg" alt="duvidas"/></a>             
                    </div>
                </div>
            </section>
        </header>
        <!--CONFIG. DO ASIDE BLOCO DATA-->
        <aside id="bloco-data">
            <div class="data-txt">
                <?php 
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                ?>
                <p><?php echo strftime("%d");?></p>
                <p><?php echo strftime("%B");?></p>
            </div>
        </aside>
        <!--CONFIG. DO ASIDE BLOCOS TELEFONE E REDE SOCIAL-->
        <aside id="blocos-tel-social">
            <div class="telefone">
                <p>Fone: (99) 35245-9659 / 63526-8569</p>
            </div>
            <div class="social">
                <h2>Follow</h2>
                <a href="#"><img src="icons/facebook.svg" alt="facebook"></a>
                <a href="#"><img src="icons/instagram.svg" alt="instagram"></a>
            </div>
        </aside>
        <!--CONFIG. DE NOSSA HISTÓRIA-->
        <section id="sobre">
            <h2>Nossa <span class="txt-span">História</span></h2>
            <div class="container">
               <div class="img-sobre">
                    <img src="images/sobre.jpg" alt="foto da empresa"/>
               </div>
               <div class="txt-sobre">
                    <p>
                        Os próprios jogadores entenderam que não foi legal. Pediram 
                        desculpas. Mas nós não passamos a mão na cabeça dos atletas. 
                        Eles foram punidos pelo que fizeram, foram afastados. 
                        Os quatro que postaram a foto. Tive uma conversa com dois, 
                        que são garotos da base e, por serem da base, deviam um respeito 
                        ainda maior ao clube. 
                    </p>
               </div>
            </div>         
        </section>
        <!--CONFIG. DE SERVICES-->
        <main id="servicos">
            <h2>Tra<span class="txt-span">balhos</span></h2>
            <div class="container">
                <!--BLOCO UM-->
                <div class="jobs formaturas">
                    <h1>Formaturas</h1>
                    <a href="agendar.php">agendar</a>
                </div>
                <!--BLOCO DOIS-->
                <div class="jobs casamentos">
                    <h1>Casamentos</h1>
                    <a href="agendar.php">agendar</a>
                </div>
                <!--BLOCO TRES-->
                <div class="jobs anos">
                    <h1>15 Anos</h1>
                    <a href="agendar.php">agendar</a>
                </div>
                <!--BLOCO QUATRO-->
                <div class="jobs outros">
                    <h1>E Muito Mais</h1>
                    <a href="agendar.php">agendar</a>
                </div>                                    
            </div>
        </div>
        <!--CONFIG. DE PARCEIROS DO SITE-->
        <section id="parceiros">
            <h2>Par<span class="txt-span">ceiros</span></h2>
            <div class="container">
                <div class="logo-parceiros">
                    <ul>
                        <li><a href="#">Talita Leal Makeup</a></li>
                        <li><a href="#">Fernando Nascimento</a></li>
                        <li><a href="#">CanonBR</a></li>
                        <li><a href="#">Gusttavo Lima</a></li>
                        <li><a href="#">Talita Leal Makeup</a></li>
                        <li><a href="#">Fernando Nascimento</a></li>
                    </ul>
                </div>                               
            </div>
        </section>
        <!--CONFIG. DO RODAPÉ DO SITE-->
        <footer id="rodape">
            <h2>Con<span class="txt-span">tatos</span></h2>
            <!--CONFIG. DO FORMULARIO DE CONTATOS-->
            <div class="formulario">
                <form>
                    <input class="meio" type="text" placeholder="Nome">
                    <input class="meio" type="text" placeholder="Telefone">
                    <input type="email" placeholder="Email">                    
                    <textarea name="message" rows="5" cols="30" placeholder="Msg"></textarea>
                    <input class="enviar" type="submit" value="Enviar">
                </form>
            </div>
            <div class="ctn-rodape">
                <!--CONFIG. DO SITE MAP-->
                <div class="site-map marg-esq">
                    <h4>Site Map</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>                   
                </div>                
                <!--CONFIG. DO SOCIAL-->
                <div class="social borda-esq marg-esq">
                    <h4>Follow</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                    <br>
                    <h4>Parceiros</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>                    
                </div>
                <!--ENDEREÇO DO CLIENTE-->
                <div class="endereco borda-esq marg-esq">
                    <h4>JW Fotografias</h4>
                    <p>
                        Fone:(99) 96589-6589 / 96589-9658<br>
                        Email: exemplos@exemplos.com.br<br>
                        Rua: Pernambuco n° 110 Juçara</br>
                        Imperatriz-ma.
                    </p>
                </div>
            </div>
            <!--MARCA REGISTRADA DO SITE-->
            <div class="marca-registrada">
                <p>JW Fotografias&copy;2018-<?php echo date("Y");?></p>
            </div>            
        </footer>
    </body>
</html>