<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title> <?php print $cabecalho_title; ?> </title>
    
    <?php print @$cabecalho_css; ?>
    
</head>

<body>
    
    <!--Cabeçalho -->
    <header class="container">
        <h1> <img src="img/logo.png" alt="Mirror Fashion"> </h1>

        <p class="sacola">
            nenhum item na sacola
        </p>

        <nav class="menu-opcoes">
            <ul>
                <li> <a href="#"> Sua Conta </a> </li>
                <li> <a href="#"> Lista de desejos </a> </li>
                <li> <a href="#"> Cartão felicidade </a> </li>
                <li> <a href="sobre.php"> Sobre </a> </li>
                <li> <a href="#"> Ajuda </a> </li>
            </ul>
        </nav>
    </header>