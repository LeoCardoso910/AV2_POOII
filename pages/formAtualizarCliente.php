<?php

$codCliente = isset($_GET['codCliente']) ? $_GET['codCliente'] : null;
$cpf = isset($_GET['cpf']) ? $_GET['cpf'] : null;
$nomeCliente = isset($_GET['nomeCliente']) ? $_GET['nomeCliente'] : null;
$renda = isset($_GET['renda']) ? str_replace(',', '.', $_GET['renda']) : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;

function alert(){
  echo "<script>alert('CPF INVÁLIDO')</script>";
}
isset($_GET['msg']) ? ($_GET['msg'] == 'cpfInvalido' ? alert() : '') : '';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="CADASTRAR CLIENTE, LOJA PHP">
  <meta name="description" content="">
  <title>ATUALIZAR CLIENTE</title>
  <link rel="stylesheet" href="../public/assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="../public/assets/css/CLIENTES.css" media="screen">
  <link rel="shortcut icon" href="../public/assets/img/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png" type="image/x-icon">
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
      "logo": "images/f69aed53dbb5bcd6f5cc6d7a9c8dda957767ea33ca1c67ac86ad20100f2d5b9e8a075b298c3e3dfac3accdc9edd9c5b19148fad85eb84492668394_1280.png"
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

    </head>
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="carousel_ae01">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">ATUALIZAR CLIENTE</h2>
        <h5 class="u-text u-text-default u-text-1">Código do cliente: <?= $codCliente ?></h5>
        <div class="u-align-center u-container-style u-group u-radius-30 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-expanded-width u-form u-form-1">
              <form action="../interfaces/atualizacao/atualizarCliente.php" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px;">
                <div class="u-form-email u-form-group">
                  <label for="text-4c18" class="u-label">NOME DO CLIENTE</label>
                  <input value="<?= $nomeCliente ?>" type="text" pattern="^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÒÖÚÇÑ ]+$" placeholder="Nome do cliente" id="text-4c18" name="nomeCliente" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-302c" class="u-label">CPF</label>
                  <input value="<?= $cpf ?>" pattern="\b\d{11}\b" placeholder="Digite os 11 dígitos do CPF do Cliente" type="text" id="text-302c" name="cpf" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="unidade" class="u-label">EMAIL</label>
                  <input value="<?= $email ?>" type="email" placeholder="Digite o e-mail do cliente" id="text-302c" name="email" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
                </div>
                <div class="u-form-group u-form-group-5">
                  <label for="text-9312" class="u-label">RENDA</label>
                  <input value="<?= $renda ?>" type="text" pattern="[1-9]\d*(\,\d+)?$" id="text-9312" placeholder="Digite a renda do cliente" name="renda" class="u-border-2 u-border-palette-4-light-3 u-input u-input-rectangle u-palette-4-light-3 u-radius-10" required="required">
                </div>
                <input type="hidden" name="codCliente" id="codCliente" value="<?= $codCliente ?>">
                <div class="u-align-right u-form-group u-form-submit">
                  <button onclick="return confirm('Tem certeza que dejesa atualizar esse registro?')" type="submit" class="u-active-palette-4-light-1 u-border-5 u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-light-1 u-palette-4-base u-radius-10 u-btn-1">ATUALIZAR</button>
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