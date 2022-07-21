<?php
require_once '../controller/CUsuario.php';
$cardUsuario = new CUsuario ();
$listaUsers = $cardUsuario->getUsuario();
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
        <select name="perrfilAcesso">
            <option value="">Perfil Acesso</option>
            <option value="admim">Administrador</option>
            <option value="user">Usuário</option>
            
        </select>
        <br/><br/>
        <input type="text" name="usuario" placeholder="User aqui...">
        <br/><br/>
        <input type="password" name="senha" minlength="8"  placeholder="Senha aqui...">

        <input type="submit" value="Salvar" name="Salvar"> 
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">

        <input type="button" value="Lista Usuários" onclick="document.getElementById('lista').style.visibility='visible'">
    </form>
        <div id="lista" style="visibility: hidden" >
            <h2>Lista Usuários</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Usuários</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaUsers as $user): ?>
                    <tr>
                        <td><?php echo $user['idUsuario'] ?></td>
                        <td><?php echo $user['nomeUsuario'] ?></td>
                        <td><?php echo $user['perfilAcesso'] ?></td>
                        <td><?php echo $user['usuario'] ?></td>
                        <td>---</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/>
            <input type="button" value="Ocultar Lista" onclick="document.getElementById('lista').style.visibility='hidden'">
        </div>
    </body>
</html>
