<?php

class ConexaoBD
{
    private $BancoLink;
    private $Servidor;
    private $Base;
    private $Senha;

    function __construct($base, $usuario, $senha, $servidor)
    {

        $this->Servidor = $servidor;
        $this->Base = $base;
        $this->Usuario = $usuario;
        $this->Senha = $senha;

        $this->BancoLink = new PDO ("mysql:host=$this->Servidor;dbname=$this->Base",
                                    $this->Usuario,
                                    $this->Senha);      
         
    }

    public function execute($sql)
    {
        return $this->BancoLink->exec($sql);
    }
    public function query()
    {
    }
    public function logicoSql()
    {
    }
    public function pontoVirgula()
    {
    }
    public function dataSql()
    {
    }
    public function valorSql()
    {
    }
    public function existe($sql){
        $result = $this->BancoLink->query($sql)->fetchColumn();
        if($result > 0){
            return true;
        }
        return false;
    }
}
