    <?php
      $conexao = mysqli_connect("dados.cqxrmsmdhobc.us-east-1.rds.amazonaws.com:3306", "admin", "12345678", "dados");
      $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
      $produto = mysqli_fetch_array($dados);
    ?>
    <?php
      $cabecalho_title = "$produto[nome] - Mirror Fashion";
      $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
      include("cabecalho.php");
      include_once("analyticstracking.php");
    ?>

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1><?= $produto["nome"] ?></h1>
          <p>por apenas <?= $produto["preco"] ?></p>

          <div class="share">
            <div class="fb-share-button" data-href="http://mirrorfashion.net/loja" data-send="false" data-layout="box_count"></div>
            <a class="twitter-share-button" href="https://twitter.com/share" data-count="vertical">Tweet</a>
            <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
            <div class="g-plusone" data-annotation="inline" data-width="300" data-href="https://plus.google.com/mirrorfashion"></div>
          </div>

          <form action="checkout.php" method="POST">
          <input type="hidden" name="id" value="<?= $produto["id"] ?>">
          <input type="hidden" name="nome" value="<?= $produto["nome"] ?>">
          <input type="hidden" name="preco" value="<?= $produto["preco"] ?>">
            <fieldset class="cores">
              <legend>Escolha a cor:</legend>

              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png">
              </label>

              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png">
              </label>

              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png">
              </label>

            </fieldset class="tamanhos">

            <fieldset>
              <legend>Escolha o tamanho:</legend>

              <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
              <output for="tamanho" name="valortamanho">42</output>
            </fieldset>

            <input type="submit" class="comprar" value="Comprar">
          </form>
        </div>
        <div class="produto">
          <p><?= $produto["descricao"] ?></p>
          <h2>Detalhes do produto</h2>

          <table>
            <thead>
              <tr>
                <th>Característica</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã 7845</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodão e poliester</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Azul, Rosa e Verde</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mão</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/produto.js"></script>

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Twitter button -->
    <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
      if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
      js.src="http://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>

    <!-- Posicione esta tag depois da última tag do botão +1. -->
    <script type="text/javascript">
      window.___gcfg = {lang: 'pt-BR'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

    <?php include("rodape.php"); ?>
