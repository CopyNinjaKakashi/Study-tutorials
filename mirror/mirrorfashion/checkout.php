<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title> Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="nav-header">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo-rodape.png" alt="Mirror Fashion">
            </a>

            <button class="navbar-toggle" type="button"
                    data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="glyphicon glyphicon-align-justify"></span>
            </button>
        </div>

        <ul class="nav navbar-nav collapse navbar-collapse">
            <li>
                <a href="sobre.php">
                     Sobre  
                     <span class="glyphicon glyphicon-home"></span>
                </a> 
            </li>
            
            <li>
                <a href="#">
                     Ajuda 
                     <span class="glyphicon glyphicon-question-sign"></span>
                </a>
            </li>

            <li>
                <a href="#"> 
                    Perguntas frequentas 
                    <span class="glyphicon glyphicon-list-alt"></span> 
                </a>
            </li>

            <li>
                <a href="#"> 
                    Entre em contato 
                    <span class="glyphicon glyphicon-bullhorn"></span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron">

        <div class="container">

            <h1> Ótima escolha! </h1>
            <p> Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra. </p>
        </div>

    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title"> Sua compra </h2>
                    </div>

                    <div class="panel-body">
                        <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png"
                         class="img-thumbnail img-responsive hidden-xs" alt="imagem da foto">
                        <dl>
                            <dt> Cor </dt>
                            <dd>
                                <?= $_POST['cor'] ?>
                            </dd>

                            <dt> Tamanho </dt>
                            <dd>
                                <?= $_POST['tamanho'] ?>
                            </dd>

                            <dt> Produto </dt>
                            <dd>
                                <?= $_POST['nome'] ?>
                            </dd>

                            <dt> Preço </dt>
                            <dd id="preco">
                                <?= $_POST['preco'] ?>
                            </dd>
                        </dl>

                        <div class="form-group">
                            <label for="qt"> Quantidade </label>
                            <input id="qt" class="form-control" type="number" 
                                    min="0" max="99" value="1">
                        </div>

                        <div class="form-group">
                            <label for="total"> Total </label>
                            <output id="total" class="form-control"> <!--for="qt valor" -->
                                R$ <?= $_POST["preco"] ?>
                            </output>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-lg-9">

                <form>
                    <div class="row">

                        <fieldset class="col-md-6">
                            <legend> Dados Pessoais </legend>

                            <div class="form-group">
                                <label for="nome"> Nome completo </label>
                                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="email"> Email </label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf"> CPF </label>
                                <input type="text" class="form-control" id="cpf" name="cpf"
                                 placeholder="000.000.000-00" data-mask="999.999.999-99" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                            </div>

                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend> Cartão de Crédito </legend>

                            <div class="form-group">
                                <label for="numero-cartao"> Numero - CVV</label>
                                <input type="text" class="form-control" id="numero-cartao"
                                 name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao"> Bandeira </label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <option value="master"> MasterCard </option>
                                <option value="visa"> Visa </option>
                                <option value="amex"> American Express </option>
                            </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao"> Validade </label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>

                    </div>
                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/jquery.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/converteMoeda.js"></script>
    <script type="text/javascript" src="js/testaConversao.js"></script> 

    <script type="text/javascript" src="js/total.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>

</body>

</html>