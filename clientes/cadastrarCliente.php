<?php
	require_once __DIR__ . '/../class/Cliente.php';

    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    $nomeCliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
    $renda = isset($_POST['renda']) ? $_POST['renda'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $classe = isset($_POST['classe']) ? $_POST['classe'] : null;

    Cliente::incluir($cpf, $nomeCliente, $email, $renda, $classe);

    header('Location: ../clientes.php');
?>