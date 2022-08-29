<?php
session_start();
require_once __DIR__ . '/../class/Produto.php';
require_once __DIR__ . '/../class/Cliente.php';
$clientes = Cliente::listar();
$existeClientesAtivos = Cliente::verificaClientesAtivos();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
	<meta name="description" content="">
	<title>CARRINHO</title>
	<link rel="stylesheet" href="../public/assets/css/nicepage.css" media="screen">
	<link rel="stylesheet" href="../public/assets/css/PRODUTOS.css" media="screen">
	<link rel="stylesheet" href="../public/assets/css/style.css" media="screen">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
      <a class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
        <img src="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="pt-2 u-list u-list-1">
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav nav nav-tabs u-unstyled u-nav-1">
            <li class="u-nav-item nav-item "><a class="u-nav-link nav-link " href="../index.php" style="padding: 10px 20px;">LOJA PHP</a>
	          </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link nav-link" href="produtos.php" style="padding: 10px 20px;">PRODUTOS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link nav-link" href="VENDAS.php" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link nav-link" href="clientes.php" style="padding: 10px 20px;">CLIENTES</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link active nav-link" href="carrinho.php" style="padding: 10px 20px;">CARRINHO <i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
	  </div>
       
</header>

	<?php if (isset($_SESSION['carrinho'])) { ?>

		<section class=" u-align-center u-clearfix u-gradient u-section-1" id="sec-c648">
			<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
				<div class="u-expanded-width u-table u-table-responsive u-table-1">
					<div class="conteudo">
					<div class="sellArea">
					<h1>Produtos adicionados</h1>
					<hr>
					<form action="../interfaces//venda/realizarVenda.php" method="POST">
						<?php
						foreach ($_SESSION['carrinho'] as $key => $value) {
							$data = explode('-', $value);
							$codProduto = $data[0];
							$quantidade = $data[1];
							$produto = Produto::listarPorId($codProduto);
							$subtotal = $quantidade * $produto['valorUnitario'];
						?>
							<div class='container-fluid'>
								<div class="card mx-auto col-md-3 col-10 mt-5">
									<img class='mx-auto img-thumbnail' src="<?= $produto['imagem'] ?>" width="100px" height="100px" />
									<div class="card-body text-center mx-auto">
										<div class='cvp'>
											<h5 class="card-title font-weight-bold"><?= $produto['descricao'] ?></h5>
											<p class="card-text">R$ <?= $produto['valorUnitario'] ?></p>
											<p class="card-text">Quantidade: <input class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1" min="1" max="<?= $produto['qtdEstoque'] ?>" type="number" name="<?= $codProduto ?>" id="<?= $codProduto ?>" value="<?= $quantidade ?>"></br></p>
											<span class="card-text" id="subTotal<?= $codProduto ?>">Subtotal: R$ <?= $subtotal ?></span>
											<a href="../interfaces/carrinho/removerProduto.php?codProduto=<?= $codProduto ?>">
											<button class="cartRemove pt-2 u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1" type="button">Remover do carrinho</button>
											</a>											
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<br>
						<a href="vendas.php#carousel_cfa9">
							<button type="button" class="u-active-palette-3-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">Adicionar mais Produtos</button>
						</a>
						<hr>
						</br>
						<?php if ($existeClientesAtivos) { ?>
						
							<h1>Realizar venda: </h1>
							<h3 id="total" class="fw-bold">Total: R$ <?= $_SESSION['valorCarrinho'] ?></h3>
							<div class="d-flex flex-row p-3 align-items-center justify-content-center">
								<div class="fs-4 fw-bold pe-3">
									Comprador:
								</div>
								<div class="fw-bold">
									<select class="u-active-palette-4-light-2 u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-4-light-1 u-radius-9 u-text-body-alt-color u-text-hover-white u-btn-1" name="cliente" id="cliente">
										<?php while ($crow = $clientes->fetch()) { ?>
											<option value="<?= $crow['cod_cliente'] ?>"><?= $crow['nomeCliente'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<input type="hidden" name="dataVenda" id="datVenda" value="<?= date('Y/m/d') ?>">
							<button type="submit" class="u-active-palette-3-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">Vender</button>
							</h3>
							
						<?php } else { ?>
							<h3><strong>Não há clientes aptos para comprar.</strong></h3>
							<a href="clientes.php#carousel_ae01">
								<button type="button" class="u-active-palette-3-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">Adicionar novo Cliente</button>
							</a>
						<?php } ?>
					</form>
					</div>
					</div>
				</div>
			</div>
		</section>

	<?php } else { ?>

		<section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-c648">
			<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
				<div class="u-expanded-width u-table u-table-responsive u-table-1">
					<h1>Carrinho vazio</h1>
					<h3>
						<a class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1" href="vendas.php#carousel_cfa9">Adicionar produtos</a>
					</h3>
				</div>
			</div>
		</section>

	<?php } ?>

	<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b990">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-subtitle u-text u-text-1">LOJA PHP</h2>
			<p class="u-small-text u-text u-text-variant u-text-2">CREATED BY LÉO, ANA, PEDRO E JOÃO&nbsp;</p>
		</div>
	</footer>
</body>

<script>
	<?php
	foreach ($_SESSION['carrinho'] as $key => $value) {
		$data = explode('-', $value);
		$codProduto = $data[0];
		$quantidade = $data[1];
		$produto = Produto::listarPorId($codProduto);
		$subtotal = $quantidade * $produto['valorUnitario'];
	?>
		$('#<?= $codProduto ?>').change(function() {
			$.ajax({
				url: '../interfaces/carrinho/atualizaSubtotal.php',
				type: 'POST',
				data: {
					codProduto: <?= $codProduto ?>,
					quantidade: $(this).val()
				},
				success: async function(data) {
					$('#subTotal<?= $codProduto ?>').html('Subtotal: R$ ' + data);
					$('#total').html('Total: R$ ' + await getTotal());
				}
			});
		});

	<?php } ?>

	$(document).ready(async function(){
		if(await getTotal() == 0){
			$('.sellArea').hide();
			$('.conteudo').append('<h1>Carrinho vazio</h1><h3><a class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1" href="vendas.php#carousel_cfa9">Adicionar produtos</a></h3>');

		}
		$('#total').html('Total: R$ ' + await getTotal());
	});	

	async function getTotal() {
		var total = 0;
		var keys = [];
		var ids = $('*[id^="subTotal"]');

		var valoresIds = Object.values(ids);

		valoresIds.forEach(function(element) {
			element.id ? keys.push(element.id) : '';

		});

		keys.forEach(function(element) {
			total += parseFloat($('#' + element).html().replace('Subtotal: R$ ', ''));
		});
		return total;
	}

</script>

</html>