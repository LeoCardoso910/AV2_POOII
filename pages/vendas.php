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
	<link rel="stylesheet" href="../css/nicepage.css" media="screen">
	<link rel="stylesheet" href="../css/VENDAS.css" media="screen">
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
							<td class="u-table-cell"></td>
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
			<h2 class="u-text u-text-default u-text-1">REALIZAR VENDA</h2>
			</BR>
			<hr>
				<h1>PRODUTOS</h1>
				<div style="display: flex; justify-content: space-evenly;">
				<?php while ($prow = $produtos->fetch()) { ?>
					<div>
					<a style="color: purple;" href="produtoVenda.php?codProduto=<?= $prow['codProduto'] ?>">
					<h4><?= $prow['descricao'] ?></h4>
					<img width="150px" height="150px" src="<?= $prow['imagem'] ?>" alt="">
					<h5>R$ <?= $prow['valorUnitario'] ?></h5>
					</a>
					</div>
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