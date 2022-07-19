<?php
class CUsuario {

    public function inserir(){
        if(isset($_POST['salvar'])){
            var_dump($_POST);
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $pdo = require_once '../pdo/Connection.php';
            $sql = "insert into usuario values (null,?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth ->bindparam(1, $nome, PDO::PARAM_STR);
            $sth ->bindparam(2, $usuario, PDO::PARAM_STR);
            $sth ->bindparam(3, $senhaEc, PDO::PARAM_STR);
            $senhaEc = password_hash ($senha, PASSWORD_DEFAULT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            }
        }

    public function getUsuario(){
        $pdo = require_once '../pdo/Connection.php';
        $sql = "select idUsuario, nomeUsuario, usuario from usuario";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }

    public function deletar(){
        if(isset($_POST['deletar'])){
        $id = (int)$_POST['idUsuario'];
        $pdo = require_once '../pdo/Connection.php';
        $sql = "delete from usuario where udUsuario = ?";
        $sth->bindparam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        unset($sth);
        unset($pdo);
        header("refresh: 0");
        }
    }
    public function getUsuarioById($id){
        $pdo = require_once '../pdo/Connection.php';
        $sql = "select idUsuario, nomeUsuario, usuario from usuario where idUsuario =?";
        $sth = $pdo->prepare($sql);
        $sth->bindparam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;

    }

   public function trocaSenha(){
    if(isset($_POST['trocaSenha'])){
    $idUsuario = $_POST['idUsuario'];
    $novaSenha = $_POST['novaSenha'];
    $pdo = require_once '../pdo/Connection.php';
    $sql = "update usuario set senha = ? where idUsuario = ?";
    $sth = $pdo->prepare($sql);
    $sth ->bindparam(3, $senhaPH, PDO::PARAM_STR);
    $senhaPH = password_hash ($novaSenha, PASSWORD_DEFAULT);
    $sth->bindPARAM(2, $idUSuario, PDO::PARAM_INT);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("location: ususario.php");

   }
 }
}
?>