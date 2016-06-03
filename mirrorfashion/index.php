<?php
  $cabecalho_title = "Mirror Fashion";
  include("cabecalho.php");
  ?>

  <div class="container destaque">

    <section class="busca">
      <h2>Busca</h2>

      <form action="http://www.google.com.br/search" id="form-busca">
        <input type="search" name="q" id="q" title="CAMPO DE BUSCA VAZIO!" required>
        <input type="image" src="img/busca.png">
      </form>
    </section>

    <section class="menu-departamentos">
      <h2>Departamentos</h2>

      <nav>
        <ul>
          <li><a href="#">Blusas e Camisas</a>
            <ul>
              <li><a href="#">Manga curta</a></li>
              <li><a href="#">Manga comprida</a></li>
              <li><a href="#">Camisa social</a></li>
              <li><a href="#">Camisa casual</a></li>
            </ul>
          </li>
          <li><a href="#">Calças</a>
            <ul>
              <li><a href="#">Calça Jeans</a></li>
              <li><a href="#">Calça Flare</a></li>
              <li><a href="#">Calça Skinny</a></li>
              <li><a href="#">Calça Cigarrete</a></li>
            </ul>
          </li>
          <li><a href="#">Saias</a>
            <ul>
              <li><a href="#">Saia Plissada</a></li>
              <li><a href="#">Saia Godê</a></li>
              <li><a href="#">Saia de Babado</a></li>
              <li><a href="#">Saia Longa</a></li>
              <li><a href="#">Minissaia</a></li>
            </ul>
          </li>
          <li><a href="#">Vestidos</a>
            <ul>
              <li><a href="#">Vestido Mullet</a></li>
              <li><a href="#">Vestido Balonê</a></li>
              <li><a href="#">Vestido Peplum</a></li>
              <li><a href="#">Vestido Longo</a></li>
            </ul>
          </li>
          <li><a href="#">Sapatos</a>
            <ul>
              <li><a href="#">Scarpin</a></li>
              <li><a href="#">Mary Jane</a></li>
              <li><a href="#">Stiletto</a></li>
              <li><a href="#">Chanel</a></li>
              <li><a href="#">Mule</a></li>
              <li><a href="#">Babuche</a></li>
            </ul>
          </li>
          <li><a href="#">Bolsas e Carteiras</a></li>
          <li><a href="#">Acessórios</a>
            <ul>
              <li><a href="#">Cintos</a></li>
              <li><a href="#">Cachecóis</a></li>
              <li><a href="#">Joalheria</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </section>

    <img src="img/destaque-home.png", "img/destaque-home-2.png" alt="Promoção: Big City Night">
    <a href="#" class="pause"></a>
  </div>


  <div class="container paineis">
    <section class="painel novidades">
      <h2>Novidades</h2>

      <ol>
        <?php
          $conexao = mysqli_connect("dados.cqxrmsmdhobc.us-east-1.rds.amazonaws.com:3306", "admin", "12345678", "dados");
          $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");

          while ($produto = mysqli_fetch_array($dados)):
        ?>

        <li>
          <a href="produto.php?id=<?= $produto["id"] ?>">
            <figure>
              <img src="img/produtos/miniatura<?= $produto["id"] ?>.png"
                   alt="<?= $produto["nome"] ?>">
              <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
            </figure>
          </a>
        </li>

        <?php endwhile; ?>
      </ol>
      <button type="button">Mostrar mais</button>
    </section>

    <section class="painel mais-vendidos">
      <h2>Mais Vendidos</h2>
      <ol>
         <?php
          $conexao = mysqli_connect("dados.cqxrmsmdhobc.us-east-1.rds.amazonaws.com:3306", "admin", "12345678", "dados");
          $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");

          while ($produto = mysqli_fetch_array($dados)):
        ?>

        <li>
          <a href="produto.php?id=<?= $produto["id"] ?>">
            <figure>
              <img src="img/produtos/miniatura<?= $produto["id"] ?>.png"
                   alt="<?= $produto["nome"] ?>">
              <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
            </figure>
          </a>
        </li>

        <?php endwhile; ?>
      </ol>
      <button type="button">Mostrar mais</button>
    </section>
  </div>

    <script src="js/jquery.js"></script>
    <script src="js/home.js"></script>

  <?php include("rodape.php"); ?>
