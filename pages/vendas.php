<?php
require_once __DIR__ . '/../class/Venda.php';
require_once __DIR__ . '/../class/Cliente.php';
require_once __DIR__ . '/../class/Produto.php';
$query = Venda::listar();
$clientes = Cliente::listar();
$produtos = Produto::listar();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="​CADASTRAR VENDAS, LOJA PHP">
	<meta name="description" content="">
	<title>VENDAS</title>
	<link rel="stylesheet" href="../css/style.css" media="screen">
	<link rel="stylesheet" href="../css/nicepage.css" media="screen">
	<link rel="stylesheet" href="../css/VENDAS.css" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
	<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "",
			"logo": "../images/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png"
		}
	</script>
	<meta name="theme-color" content="#478ac9">
	<meta property="og:title" content="LOJA PHP">
	<meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
	<header class="u-clearfix u-header u-palette-1-light-2 u-header" id="sec-9fa5">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="1262">
				<img src="../img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" class="u-logo-image u-logo-image-1">
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
	</header>
	<section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-974e">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-table u-table-responsive u-table-1">
				<table class="u-table-entity u-table-entity-1">
					<colgroup>
						<col width="25%">
						<col width="25%">
						<col width="25%">
						<col width="25%">
					</colgroup>
					<tbody class="u-table-alt-palette-1-light-3 u-table-body">
						<tr style="height: 65px;">
							<td class="u-align-center u-table-cell u-table-cell-1">CÓDIGO DA VENDA</td>
							<td class="u-align-center u-table-cell u-table-cell-2">CÓDIGO DO CLIENTE</td>
							<td class="u-align-center u-table-cell u-table-cell-3">DATA DA VENDA</td>
							<td class="u-align-center u-table-cell u-table-cell-3">DETALHES DA VENDA</td>
						</tr>
						<?php while ($row = $query->fetch()) { ?>
							<tr style="height: 65px;">
								<td class="u-align-center u-table-cell"><?= $row['codVenda'] ?></td>
								<td class="u-align-center u-table-cell"><?= $row['codCliente'] ?></td>
								<td class="u-align-center u-table-cell"><?= $row['dataVenda'] ?></td>
								<td class="u-align-center u-table-cell"><a style="font-weight: bold; color: indigo;" href="detalhevenda.php?codVenda=<?= $row['codVenda'] ?>&codCliente=<?= $row['codCliente'] ?>&dataVenda=<?= $row['dataVenda'] ?>">Detalhes</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-gradient u-section-2" id="carousel_cfa9">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-text u-text-default u-text-1">VENDA</h2>
			</BR>
			<hr>
			<h1>PRODUTOS</h1>
			<div style="
					display: flex;
					justify-content: space-between;">
				<?php while ($prow = $produtos->fetch()) { ?>
					<?php if($prow['qtdEstoque'] > $prow['estoqueMinimo']) { ?>
						<div class="product">
							<a style="color: purple;" href="produtoVenda.php?codProduto=<?= $prow['codProduto'] ?>">
								<h4><?= $prow['descricao'] ?></h4>
								<img width="150px" height="150px" src="<?= $prow['imagem'] ?>" alt="">
								<h5>R$ <?= $prow['valorUnitario'] ?></h5>
							</a>
						</div>
					<?php } else { ?>
						<div class="product">
						<a style="color: purple;" href="formAtualizarProduto.php?codProduto=<?= $prow['codProduto'] ?>&descricao=<?= $prow['descricao'] ?>&valorUnitario=<?= $prow['valorUnitario'] ?>&unidade=<?= $prow['unidade'] ?>&estoqueMinimo=<?= $prow['estoqueMinimo'] ?>&qtdEstoque=<?= $prow['qtdEstoque'] ?>">
							<h4><?= $prow['descricao'] ?></h4>
							<h3 style="color: red; font-weight: bold;">ESGOTADO!</h3>
							<img width="150px" height="150px" src="<?= $prow['imagem'] ?>" alt="">
							<h5>R$ <?= $prow['valorUnitario'] ?></h5>
						</a>
					</div>
					<?php } ?>
				<?php } ?>
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