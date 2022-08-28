<?php
require_once __DIR__ . '/../class/Produto.php';
$codProduto = isset($_GET['codProduto']) ? $_GET['codProduto'] : null;
$produto = Produto::listarPorId(isset($_GET['codProduto']) ? $_GET['codProduto'] : 0);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
  <meta name="description" content="">
  <title><?= $produto['descricao'] ?></title>
  <link rel="stylesheet" href="../public/assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../public/assets/css/PRODUTOS.css" media="screen">
  <link rel="stylesheet" href="../public/assets/css/produtoVenda.css" media="screen">
  <link rel="shortcut icon" href="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
      <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
        <img src="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="u-list u-list-1">
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-nav-link u-text-active-black u-text-hover-palette-2-base" href="../index.php" style="padding: 10px 20px;">LOJA PHP</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="../PAGES/produtos.php" style="padding: 10px 20px;">PRODUTOS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="../PAGES/VENDAS.php" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="../PAGES/clientes.php" style="padding: 10px 20px;">CLIENTES</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="carrinho.php" style="padding: 10px 20px;">CARRINHO <i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
      </div>
  </header>
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-c648">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-expanded-width u-table u-table-responsive u-table-1" style="font-weight: bold;">
        <form action="../interfaces/carrinho/adicionarAoCarrinho.php" method="POST">
          <div class="card">
            <img src="<?= $produto['imagem'] ?>" alt="" class="image" style="width:100%">
            <h1><?= $produto['descricao'] ?></h1>
            <p id="subTotal" class="price">R$ <?= $produto['valorUnitario'] ?></p>
            <p>
              <input class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1" type="number" value="1" min="1" max="<?= $produto['qtdEstoque'] ?>" name="qtde" id="qtde" placeholder="Quantidade" required></input><br>
            </p>
            <input type="hidden" value="<?= $produto['codProduto'] ?>" name="codProduto" id="codProduto">
            <button type="submit">Adicionar ao carrinho</button>
          </div>
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

<script>
	
		$('#qtde').change(function() {
			$.ajax({
				url: '../interfaces/carrinho/atualizaSubtotal.php',
				type: 'POST',
				data: {
					codProduto: <?= $codProduto ?>,
					quantidade: $(this).val()
				},
				success: function(data) {
					$('#subTotal').html('R$ ' + data);
          console.log(data);
				}
			});
		});
</script>

</html>