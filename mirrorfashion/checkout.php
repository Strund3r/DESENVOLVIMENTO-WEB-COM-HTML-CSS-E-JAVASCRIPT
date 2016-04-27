<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
  </head>

  <header>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </header>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <style>
        body { padding-top: 15px; }
      </style>
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Mirror Fashion</a>
        <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
          <span class="glyphicon glyphicon-align-justify"></span>
          <style>
            .navbar .glyphicon {
              color: white;
            }
          </style>
        </button>
      </div>
      <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Perguntas frequentes</a></li>
        <li><a href="#">Entre em contato</a></li>
      </ul>
    </nav>
    <style>
      .navbar {
        margin: 0;
      }
    </style>
  
    <div class="jumbotron">
      <div class="container">
        <h1>Ótima escolha!</h1>
  
        <p>
          Obrigado por comprar na Mirror Fashion!
          Preencha seus dados para efetivar a compra.
        </p>
      </div>
    </div>
  
    <div class="container">
      <div class="row">
  
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h2 class="panel-title">Sua compra</h2>
            </div>
            <div class="panel-body">
              <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive">
              <dl>
                <dt>Produto</dt>
                <dd><?= $_POST["nome"] ?></dd>
  
                <dt>Preço</dt>
                <dd><?= $_POST["preco"] ?></dd>
  
                <dt>Cor</dt>
                <dd><?= $_POST["cor"] ?></dd>
  
                <dt>Tamanho</dt>
                <dd><?= $_POST["tamanho"] ?></dd>
              </dl>
            </div>
          </div>
        </div>
  
        <form class="col-sm-8">
          <div class="row">
            <fieldset class="col-md-6">
              <legend>Dados Pessoais</legend>
  
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Dino da Silva Sauro" required>
              </div>
  
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="dino.s.sauro@exemplo.com" required>
              </div>
  
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="tel" class="form-control" id="cpf" name="cpf" placeholder="___.___.___-__" data-mask="999.999.999-99" required>
              </div>
  
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="sim" name="spam" checked>
                  Quero receber spam da Mirror Fashion
                </label>
              </div>
  
            </fieldset class="col-md-6">
  
            <fieldset>
              <legend>Cartão de crédito</legend>
  
              <div class="form-group">
                <label for="numero-cartao">Número - CVV</label>
                <input type="tel" class="form-control" id="numero-cartao" name="numero-cartao" placeholder="____ ____ ____ ____ - ___" data-mask="9999 9999 9999 9999 - 999" required>
              </div>
  
              <div class="form-group">
                <label for="bandeira-cartao">Bandeira</label>
                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control" required>
                  <option value="" disabled selected>*** ESCOLHA UMA OPÇÃO ***</option>
                  <option value="visa">VISA</option>
                  <option value="master">MasterCard</option>
                  <option value="amex">American Express</option>
                </select>
              </div>
  
              <div class="form-group">
                <label for="validade-cartao">Validade</label>
                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao" required>
              </div>
  
            </fieldset>
          </div>
  
          <div class="g-recaptcha" data-sitekey="6LdopB0TAAAAAFSxGcZcWMptq2Dz8zwcXL5JwpQ-"></div>
  
            <form action="?" method="POST">
              <div id="html_element"></div>
              <div class="g-recaptcha" data-sitekey="6LdopB0TAAAAAFSxGcZcWMptq2Dz8zwcXL5JwpQ-"></div>
              <br/>
              <button type="submit" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                Confirmar Pedido
              </button>
            </form>
  
          <button type="submit" class="btn btn-success btn-lg">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
          </button>
        </form>
      </div>
    </div>
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/inputmask-plugin.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript">
    var onloadCallback = function() {
      grecaptcha.render('html_element', {
        '6LdopB0TAAAAAFSxGcZcWMptq2Dz8zwcXL5JwpQ-' : '6LdopB0TAAAAAAkZd1iylWJYnzTXjyUs0sIwP8x4'
      });
    };
  </script>
  
  </body>
</html>