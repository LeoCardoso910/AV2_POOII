<?php
require_once __DIR__ . '/../class/DetalheVenda.php';

$codVenda = isset($_GET['codVenda']) ? $_GET['codVenda'] : null;
$codCliente = isset($_GET['codCliente']) ? $_GET['codCliente'] : null;
$dataVenda = isset($_GET['dataVenda']) ? $_GET['dataVenda'] : null;

$detalhesVenda = DetalheVenda::getListaProduto($codVenda);
$subTotal = DetalheVenda::getSubTotal($codVenda);
$total = DetalheVenda::getTotal($codVenda);

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​CADASTRAR VENDAS, LOJA PHP">
  <meta name="description" content="">
  <title>DETALHE DA VENDA</title>
  <link rel="stylesheet" href="../public/assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../public/assets/css/VENDAS.css" media="screen">
  <link rel="shortcut icon" href="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <meta property="og:title" content="VENDAS">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
<header class="u-clearfix u-header u-palette-1-light-2 u-header" id="sec-9fa5">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
        <img src="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="u-list u-list-1">
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-nav-link u-text-active-black u-text-hover-palette-2-base" href="../index.php" style="padding: 10px 20px;">LOJA PHP</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="produtos.php" style="padding: 10px 20px;">PRODUTOS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="VENDAS.php" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="clientes.php" style="padding: 10px 20px;">CLIENTES</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="carrinho.php" style="padding: 10px 20px;">CARRINHO <i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-974e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
          </colgroup>
          <tbody class="u-table-alt-palette-1-light-3 u-table-body">
            <tr style="height: 65px;">
              <td class="u-align-center u-table-cell u-table-cell-1">CÓDIGO DA VENDA</td>
              <td class="u-align-center u-table-cell u-table-cell-2">CÓDIGO DO CLIENTE</td>
              <td class="u-align-center u-table-cell u-table-cell-3">CÓDIGO DO PRODUTO</td>
              <td class="u-align-center u-table-cell u-table-cell-3">QUANTIDADE DO PRODUTO</td>
              <td class="u-align-center u-table-cell u-table-cell-3">DESCRIÇÃO DO PRODUTO</td>
              <td class="u-align-center u-table-cell u-table-cell-3">VALOR UNITÁRIO DO PRODUTO</td>
              <td class="u-align-center u-table-cell u-table-cell-3">SUBTOTAL DA VENDA</td>
              <td class="u-align-center u-table-cell u-table-cell-3">DATA DA VENDA</td>
              <td class="u-table-cell"></td>
            </tr>
            <?php while ($row = $detalhesVenda->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr style="height: 65px;">
                <td class="u-align-center u-table-cell"><?= $codVenda ?></td>
                <td class="u-align-center u-table-cell"><?= $codCliente ?></td>
                <td class="u-align-center u-table-cell"><?= $row['codProduto'] ?></td>
                <td class="u-align-center u-table-cell"><?= $row['qtdProduto'] ?></td>
                <td class="u-align-center u-table-cell"><?= $row['descricao'] ?></td>
                <td class="u-align-center u-table-cell">R$ <?= $row['valorUnitario'] ?></td>
                <td class="u-align-center u-table-cell">R$ <?= $subTotal->fetch()['subTotal'] ?></td>
                <td class="u-align-center u-table-cell"><?= $dataVenda ?></td>
              </tr>
            <?php } ?>
            <tr style="height: 65px;">
              <td colspan="8" class="u-align-center u-table-cell">
                <h2>Total da venda: R$<?= $total ?></h2>
              </td>
            </tr>
          </tbody>
        </table>
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