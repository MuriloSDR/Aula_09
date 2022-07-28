<?php
if(isset($_POST['editar'])){
    $id = $_POST['idUsuario'];
}
require_once '../controller/CUsuario.php';
$cadUser = new CUsuario();
$user = $cadUser->getUsuarioById($id);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1>Editar Usuário</h1>
        <form action="../controller/updateUser.php" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $user[0] ['idUsuario']; ?>">
            <input type="text" name="nome" value="<?php echo $user[0] ['nomeUsuario']; ?>">
            <br/><br/>
            <select name="perfilAcesso">
            <option value="">Selecione...</option>
                <option value="admin" 
                <?php
                if($user[0] ['perfilAcesso'] == "admin"){
                    echo "selected";}?> >

                Administrador</option>
                <option value="user"
                <?php 
                if($user[0] ['perfilAcesso'] == "user"){
                    echo "selected";}?> >
                    Usuário</option>
                    </select>
            <br/><br/>
            <input type="text" name="usuario" value="<?php echo $user[0] ['usuario']; ?>">
            <br>
            <input type="submit" name="salvar" value="Salvar">
            <input type="button" value="Voltar" 
                   onclick="location.href='listaUsuarios.php'">
        </form>
    </body>
</html>

