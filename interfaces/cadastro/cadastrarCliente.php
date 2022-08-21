<?php
	require_once __DIR__ . '/../../class/Cliente.php';
    require_once __DIR__ . '/../../class/Utils.php';

    function inclui($cpf, $nomeCliente, $email, $renda, $classe){
        try{
            Cliente::incluir($cpf, $nomeCliente, $email, $renda, $classe);
            header('Location: ../../pages/clientes.php#sec-c648');
        } catch (PDOException $e){
            $msg = $e->getCode();
            header('Location: ../../pages/clientes.php?msg='. $msg . '#carousel_ae01');
        }
        
    }

    $cpf = isset($_POST['cpf']) ? strip_tags($_POST['cpf']) : null;
    $nomeCliente = isset($_POST['nomeCliente']) ? strip_tags($_POST['nomeCliente']) : null;
    $renda = isset($_POST['renda']) ? strip_tags(str_replace(',', '.', $_POST['renda'])) : null;
    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : null;
    $classe = Cliente::calculaClasse($renda);

    validaCPF($cpf) ? inclui($cpf, $nomeCliente, $email, $renda, $classe) : header('Location: ../../pages/clientes.php?msg=cpfInvalido#carousel_ae01');
    
?>