<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
} else {
    header("location: login.php");
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <h1>Cadastro de Usuário</h1>
        <form action="<?php $cadUser->inserir() ?>"method="POST">
            <form method="POST">
                <input type='text' name='nome' placeholder="Nome Aqui..."/>
                <br><br>
                <input type='email' name='email' placeholder="E-Mail Aqui..."/>
                <br><br>
                <input type='password' name='pass' placeholder="Senha Aqui..."/>
                <br><br>
                <input type='submit' name='salvar' value='salvar'/>
                <input type='reset' name='limpar' value="limpar"/> 
                <input type="button" name="voltar" value="voltar" onclick="location.href='../index.php'" />
                <input type="button" name="listar" value='listar' onclick="location.href='listaUsuarios.php'"/>
            </form>
            <?php
            // put your code here
            ?>
    </body>
</html>
