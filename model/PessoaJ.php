<?php

require_once 'Pessoa.php';
class PessoaJ extends Pessoa{
    
    private $idPessoa;
    private $cnpj;
    private $inscEstadual;
    private $nomeFantasia;

    public function PessoaJ() {
      
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getInscEstadual()
    {
        return $this->inscEstadual;
    }

    public function setInscEstadual($inscEstadual)
    {
        $this->inscEstadual = $inscEstadual;

        return $this;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;

        return $this;
    }

    public function __toString(){
        $pes = "Pessoa física: <br/>"
        ." - Nome: " . $this->getNome() . "<br/>"
        ." - Telefone: " . $this->getTelefone() . "<br/>"
        ." - Email: " . $this->getEmail() . "<br/>"
        ." - Endereco: " . $this->getEndereco() . "<br/>"
        ." - CNPJ: " . $this->getcnpj() . "<br/>"
        ." - Insc.Estadual: " . $this->getInscEstadual() . "<br/>"
        ." - Nome Fanstasia: " . $this->getNomeFantasia() . "<br/>";
        return $pes;
    }
}
    
?>