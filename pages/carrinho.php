<?php
session_start();

if(isset($_SESSION['carrinho'])){

require_once __DIR__ . '/../class/Produto.php';
require_once __DIR__ . '/../class/Cliente.php';
$clientes = Cliente::listar();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
  <meta name="description" content="">
  <title>PRODUTOS</title>
  <link rel="stylesheet" href="../css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../css/PRODUTOS.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="PRODUTOS">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
  <header class="u-clearfix u-header u-palette-1-light-2 u-header" id="sec-9fa5">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
        <img src="../img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="LOJA-PHP.html" style="padding: 10px 20px;">LOJA PHP</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">PRODUTOS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="VENDAS.html" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">CLIENTES</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LOJA-PHP.html">LOJA PHP</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">PRODUTOS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="VENDAS.html">VENDAS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">CLIENTES</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-c648">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php
        foreach ($_SESSION['carrinho'] as $key => $value) {
          $data = explode('-', $value);
          $codProduto = $data[0];
          $quantidade = $data[1];
          $produto = Produto::listarPorId($codProduto);
          $subtotal = $quantidade * $produto['valorUnitario'];
        ?>

          <form action="../interfaces//venda/realizarVenda.php" method="POST">
            <span>Produto: <?= $produto['descricao'] ?></span> </br>
            <span>Quantidade: <?= $quantidade ?></span> </br>
            <span>Valor: R$ <?= $subtotal ?></span>
            <hr>
          <?php } ?>

          <span>Total: R$ <?= $_SESSION['valorCarrinho'] ?></span>
          </br>
          Cliente:
          <select name="cliente" id="cliente">
            <?php while ($crow = $clientes->fetch()) { ?>
              <option value="<?= $crow['cod_cliente'] ?>"><?= $crow['nomeCliente'] ?></option>
            <?php } ?>
          </select>
          <input type="hidden" name="dataVenda" id="datVenda" value="<?= date('Y/m/d') ?>">
          <input type="submit" value="Vender">
          </form>
      </div>
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b990">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-subtitle u-text u-text-1">LOJA PHP</h2>
      <p class="u-small-text u-text u-text-variant u-text-2">CREATED BY LÉO, ANA, PEDRO E JOÃO&nbsp;</p>
    </div>
  </footer>
</body>

</html>

<?php } else {?>

<?php

require_once __DIR__ . '/../class/Produto.php';
require_once __DIR__ . '/../class/Cliente.php';
$clientes = Cliente::listar();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
  <meta name="description" content="">
  <title>PRODUTOS</title>
  <link rel="stylesheet" href="../css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../css/PRODUTOS.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="PRODUTOS">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
  <header class="u-clearfix u-header u-palette-1-light-2 u-header" id="sec-9fa5">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
        <img src="../img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="LOJA-PHP.html" style="padding: 10px 20px;">LOJA PHP</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">PRODUTOS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="VENDAS.html" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">CLIENTES</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LOJA-PHP.html">LOJA PHP</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">PRODUTOS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="VENDAS.html">VENDAS</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">CLIENTES</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-c648">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <h1>Carrinho vazio</h1>
        <h3><a style="color: purple;" href="vendas.php">Adicionar produtos</a></h3>
      </div>
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b990">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-subtitle u-text u-text-1">LOJA PHP</h2>
      <p class="u-small-text u-text u-text-variant u-text-2">CREATED BY LÉO, ANA, PEDRO E JOÃO&nbsp;</p>
    </div>
  </footer>
</body>

</html> 

<?php } ?>  