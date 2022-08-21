<?php
	require_once __DIR__ . '/../../class/Cliente.php';
    require_once __DIR__ . '/../../class/Utils.php';

    function altera($codCliente, $cpf, $nomeCliente, $email, $renda, $classe){
        Cliente::alterar($codCliente, $cpf, $nomeCliente, $email, $renda, $classe);
        header('Location: ../../pages/clientes.php#sec-c648');
    }

    $codCliente = isset($_POST['codCliente']) ? strip_tags($_POST['codCliente']) : null;
    $cpf = isset($_POST['cpf']) ? strip_tags($_POST['cpf']) : null;
    $nomeCliente = isset($_POST['nomeCliente']) ? strip_tags($_POST['nomeCliente']) : null;
    $renda = isset($_POST['renda']) ? strip_tags(str_replace(',', '.', $_POST['renda'])) : null;
    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : null;
    $classe = Cliente::calculaClasse($renda);

    validaCPF($cpf) ? altera($codCliente, $cpf, $nomeCliente, $email, $renda, $classe) : header('Location: ../../pages/clientes.php?msg=cpfInvalido#sec-c648');
    
?>