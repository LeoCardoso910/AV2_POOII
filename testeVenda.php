<?php
    require_once __DIR__ . '/./class/Venda.php';
    $v1 = new Venda(1, '2011/01/01');
    $res = $v1->excluir(7);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $res ?></h1>
</body>
</html>