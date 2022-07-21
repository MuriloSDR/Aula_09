<?php
require_once '../controller/CUsuario.php';
$cardUsuario = new CUsuario ();
?>


<html >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-language" content="pt=br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Usuário</title>
    </head>

<body>
    <h1>Cadastro de Usuário</h1>
        <form action="<?php $cardUsuario->inserir(); ?>" method="POST">
        <input type="text" name="nome" placeholder="Nome aqui...">
        <br/><br/>
        <input type="text" name="usuario" placeholder="User aqui...">
        <br/><br/>
        <input type="password" name="senha" minlength="8"  placeholder="Senha aqui...">

        <input type="submit" value="Salvar" name="Salvar"> 
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">

        <input type="button" value="Lista Usuários" onclick="location.href='listaUsuarios.php'">

    
    
    </form>
</body>
</html>

