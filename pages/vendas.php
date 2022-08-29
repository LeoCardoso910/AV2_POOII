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
	<link rel="stylesheet" href="../public/assets/css/nicepage.css" media="screen">
	<link rel="stylesheet" href="../public/assets/css/VENDAS.css" media="screen">
	<link rel="shortcut icon" href="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/assets/css/style.css" media="screen">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link active nav-link" href="VENDAS.php" style="padding: 10px 20px;">VENDAS</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link nav-link" href="clientes.php" style="padding: 10px 20px;">CLIENTES</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link nav-link" href="carrinho.php" style="padding: 10px 20px;">CARRINHO <i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
	  </div>
       
</header>
	<section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-974e">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="text-center">
				<h2 class="u-text pt-3 u-text-1">VENDAS REALIZADAS</h2>
			</div>
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
			<h2 class="u-text u-text-default u-text-1">PRODUTOS À VENDA</h2>
			</BR>
			<hr color="black">
			<div class="row d-flex justify-content-around">
				<?php while ($prow = $produtos->fetch()) { ?>
					<?php if ($prow['qtdEstoque'] > $prow['estoqueMinimo']) { ?>
						<div class='col col-md-4 container-fluid d-flex justify-content-center'>
							<div class="card">
								<img class='mx-auto img-thumbnail' src="<?= $prow['imagem'] ?>" width="100px" height="100px" />
								<div class="card-body text-center mx-auto">
									<div class='cvp pt-5'>
										<h5 class="card-title font-weight-bold"><?= $prow['descricao'] ?></h5>
										<p class="card-text price pt-2">R$ <?= $prow['valorUnitario'] ?></p>
										<a href="produtoVenda.php?codProduto=<?= $prow['codProduto'] ?>" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">ADICIONAR AO CARRINHO</a>
									</div>
								</div>
							</div>
						</div>

					<?php } else if (($prow['qtdEstoque'] <= $prow['estoqueMinimo']) && ($prow['qtdEstoque'] > 0)) { ?>
						<div class='col col-md-4 container-fluid d-flex justify-content-center'>
							<div class="card">
								<img class='mx-auto img-thumbnail' src="<?= $prow['imagem'] ?>" width="100px" height="100px" />
								<div class="card-body text-center mx-auto">
									<div class='cvp'>
										<h5 class="card-title font-weight-bold"><?= $prow['descricao'] ?></h5>
										<p class="card-text price">R$ <?= $prow['valorUnitario'] ?></p>
										<h4 class="card-title font-weight-bold" style="color: red;">ESGOTANDO!</h4>
										<h4 class="card-title font-weight-bold" style="color: red;"><?= $prow['qtdEstoque'] ?> UNIDADES RESTANTES</h4>
										<a href="produtoVenda.php?codProduto=<?= $prow['codProduto'] ?>" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">ADICIONAR AO CARRINHO</a>
									</div>
								</div>
							</div>
						</div>

					<?php } else if ($prow['qtdEstoque'] == 0) { ?>
						<div class='col col-md-4 container-fluid d-flex justify-content-center'>
							<div class="card">
								<img class='mx-auto img-thumbnail' src="<?= $prow['imagem'] ?>" width="100px" height="100px" />
								<div class="card-body text-center mx-auto">
									<div class='cvp pt-4'>
										<h5 class="card-title font-weight-bold pt-3"><?= $prow['descricao'] ?></h5>
										<p class="card-text price">R$ <?= $prow['valorUnitario'] ?></p>
										<h4 class="card-title font-weight-bold" style="color: red;">ESGOTADO!</h4>
										<a href="formAtualizarProduto.php?codProduto=<?= $prow['codProduto'] ?>&descricao=<?= $prow['descricao'] ?>&valorUnitario=<?= $prow['valorUnitario'] ?>&unidade=<?= $prow['unidade'] ?>&estoqueMinimo=<?= $prow['estoqueMinimo'] ?>&qtdEstoque=<?= $prow['qtdEstoque'] ?>" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">ATUALIZAR ESTOQUE</a>
									</div>
								</div>
							</div>
						</div>
				<?php }
				} ?>
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