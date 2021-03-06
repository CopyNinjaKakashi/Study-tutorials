
    <!--Cabeçalho -->
    <?php
        $cabecalho_title = "Mirror Fashion";
        $cabecalho_css = ' <link rel="stylesheet" href="css/reset.css">
                           <link rel="stylesheet" href="css/estilos.css">
                           <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
                           <link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script"
                           rel="stylesheet">
                          ';
        include("cabecalho.php");
    ?>

    <!--busca e destaque -->
    <div class="container destaque">
        <section class="busca">
            <h2> Busca </h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section>
        <!-- fim .busca -->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li>
                        <a href="#"> Blusas e Camisas </a>

                        <ul>
                            <li> <a href="#"> Manga Curta </a></li>
                            <li> <a href="#"> Manga Comprida </a></li>
                            <li> <a href="#"> Camisa Social </a></li>
                            <li> <a href="#"> Camisa Casual </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Calças  </a></li>
                    <li><a href="#"> Saias </a></li>
                    <li><a href="#"> Vestidos </a></li>
                    <li><a href="#"> Sapatos </a></li>
                    <li><a href="#"> Bolasas e Carteiras </a></li>
                    <li><a href="#"> Acessórios </a></li>
                </ul>
            </nav>
        </section>
        <!-- fim . menu-departamento -->

        <img src="img/destaque-home.png" alt="Promoção: Big City Night">

        <a href="#" class="pause"></a>

        <!-- MINHA VERSÃO
        <button type="button" onclick="play()">
                Play
        </button>

        <button type="button" onclick="pause()">
                Pause
        </button>
        -->

        <!-- fim container destaque -->
    </div>

    <div class="container paineis">
        <section class="painel novidades">
            <h2> Novidades </h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura6.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura13.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura14.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura15.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>

            <button type="button" > Mostra mais </button>

        </section>

        <section class="painel mais-vendidos">
            <h2> Mais vendidos </h2>
            <ol>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura8.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura11.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura12.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura13.png">
                        <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura14.png">
                        <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura15.png">
                        <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                    </figure>
                </a>
            </li>
        </ol>

        <button type="button" > Mostra mais </button>

        </section>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- footer -->
    <?php include("rodape.php"); ?>
