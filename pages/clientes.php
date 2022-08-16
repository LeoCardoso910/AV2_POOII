<?php
require_once __DIR__ . '/../class/Cliente.php';
$query = Cliente::listar();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
  <meta name="description" content="">
  <title>CLIENTES</title>
  <link rel="stylesheet" href="../css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../css/CLIENTES.css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/style.css" media="screen">
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
  <meta property="og:title" content="CLIENTES">
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
              <td class="u-align-center u-table-cell">CÓDIGO DO CLIENTE</td>
              <td class="u-align-center u-table-cell">CPF</td>
              <td class="u-align-center u-table-cell">NOME</td>
              <td class="u-align-center u-table-cell">EMAIL</td>
              <td class="u-align-center u-table-cell">RENDA</td>
              <td class="u-align-center u-table-cell">CLASSE</td>
              <td class="u-align-center u-table-cell">ALTERAR</td>
              <td class="u-align-center u-table-cell">EXCLUIR</td>
            </tr>
            <?php while ($row = $query->fetch()) { ?>
              <tr style="height: 65px;">
                <td class="u-align-center u-table-cell"><?= $row['cod_cliente'] ?></td>
                <td class="u-align-center u-table-cell"><?= $row['cpf'] ?></td>
                <td class="u-align-center u-table-cell"><?= $row['nomeCliente'] ?></td>
                <td class="u-align-center u-table-cell"><?= $row['email'] ?></td>
                <td class="u-align-center u-table-cell">R$ <?= str_replace('.', ',', $row['renda']) ?></td>
                <td class="u-align-center u-table-cell"><?= $row['classe'] ?></td>
                <td class="u-align-center u-table-cell">
                  <a href="formAtualizarCliente.php?codCliente=<?= $row['cod_cliente'] ?>&cpf=<?= $row['cpf'] ?>&nomeCliente=<?= $row['nomeCliente'] ?>&email=<?= $row['email'] ?>&renda=<?= $row['renda'] ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                </td>
                <td class="u-align-center u-table-cell">
                  <a onclick=" return confirm('Tem certeza que deseja excluir esse registro?')" href="../interfaces/exclusao/excluirCliente.php?codCliente=<?= $row['cod_cliente'] ?>">
                    <i class="fa-solid fa-trash-can"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-gradient u-section-2" id="carousel_ae01">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">CADASTRAR CLIENTE</h2>
      <div class="u-align-center u-container-style u-group u-radius-30 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-expanded-width u-form u-form-1">
            <form action="../interfaces/cadastro/cadastrarCliente.php" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px;">
              <div class="u-form-email u-form-group">
                <label for="text-4c18" class="u-label">CPF</label>
                <input type="text" placeholder="Digite o CPF do Cliente" id="text-4c18" name="cpf" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="">
              </div>
              <div class="u-form-group u-form-group-3">
                <label for="text-302c" class="u-label">NOME DO CLIENTE</label>
                <input type="text" pattern="/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/" placeholder="Digite o nome do Cliente" id="text-302c" name="nomeCliente" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
              </div>
              <div class="u-form-group u-form-group-4">
                <label for="text-347b" class="u-label">EMAIL</label>
                <input type="email" placeholder="Ex: joao@gmail.com" id="text-347b" name="email" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
              </div>
              <div class="u-form-group u-form-group-5">
                <label for="text-9312" class="u-label">RENDA</label>
                <input type="text" pattern="[1-9]\d*(\.\d+)?$" id="text-9312" placeholder="Ex: R$ 1000,00" name="renda" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
              </div>
              <div class="u-align-right u-form-group u-form-submit">
                <button type="submit" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">CADASTRAR</button>
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
            </form>
          </div>
        </div>
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