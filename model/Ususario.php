<?php

class Usuario{

    private $id;
    private $nomeUsuario;
    private $usuario;
    private $senha;

    public function Usuario() {
        return  $this->idUsuario; 
    }

    public function getId() {
        return $this->idUsuario;
    }

    public function setId($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
        return $this;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) { 
        $this->senha = $senha;
        return $this;
    }

        public function __toString(){
            $user = "Usuário:<br/>"
            ." - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
            . "Usuário: " . $this->getUsuario() . "<br/>";
            return $user;
        }
    }
    ?>