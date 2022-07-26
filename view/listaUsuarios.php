<?php
require_once '../controller/CUsuario.php';
$CardUsuario = new CUsuario ();
$listaUsuarios = $CardUsuario->getUsuarios();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
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
                <?php foreach ($listaUsuarios as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['perfilAcesso']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td> <form action="editarUser.php" method="post">
                        <input type="hidden" name="idUsuario" 
                                    value="<?php echo $user['idUsuario']; ?>">
                        <input type="submit" value="Editar" name="editar">
                        </form>|

                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Deletar" name="deletar">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Voltar ao cadastro" onclick="location.href='CardUsuario.php'">
    </div>
</body>
</html>