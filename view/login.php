<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cLogin.php';
$login = new cLogin();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php $login->login() ?>"method="POST">
             <form method="POST">
            <input type='email' name='email' placeholder="E-Mail Aqui..."/>
            <br><br>
            <input type='password' name='pas' placeholder="Senha Aqui..."/>
            <br><br>
            <input type='submit' name='logar' value='logar'/>
            <input type='reset' name='limpar' value="limpar"/>
             </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
