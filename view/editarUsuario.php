<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$user=null;
if(isset($_POST['editar'])){
    require_once '../controller/cUsuario.php';
    $cadUser= new cUsuario();
    $user=$cadUser->getUsuarioById($_POST['id']);
    var_dump($user);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
