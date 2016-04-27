<?php
  $cabecalho_title = "Mirror Fashion";
  $cabecalho_css = "<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>";
  include("cabecalho.php");
  ?>

  <div class="container destaque">
  <section class="menu-departamentos">

    <h2>Minha Conta</h2>

    <nav>
      <ul>
        <li><a href="dados.php">Meus Dados Pessoais</a></li>
        <li><a href="pedidos.php">Meus Pedidos</a></li>
        <li><a href="enderecos.php">Meus Endereços</a></li>
        <li><a href="cartoes.php">Meus Cartões de Crédito</a></li>
        <li><a href="outros.php">Outros Serviços</a></li>
      </ul>
    </nav>
  </section>
  </div>

  <?php include("rodape.php"); ?>