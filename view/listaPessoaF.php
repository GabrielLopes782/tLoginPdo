<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaFisica.php';
$cadPessoaF= new cPessoaFisica();
$listPessoaF=$cadPessoaF->getPessoaF();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table><!--cria Tabela-->
            <thead><!-- Cria Cabeçalho da Tabela-->
                <tr><!-- Cria Linha da Tabela-->
                    <th>id</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th>CPF</th><th>Sexo</th><th>Funções</th><!--cria Cabeçalho-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPessoaF as $pessoaF): ?>
                    <tr>
                        <td><?php echo $pessoaF ['idPessoa']; ?> </td>
                        <td> <?php echo $pessoaF ['nome']; ?> </td>
                        <td> <?php echo $pessoaF ['telefone']; ?> </td>
                        <td> <?php echo $pessoaF ['email']; ?> </td>
                        <td> <?php echo $pessoaF ['cpf']; ?> </td>
                        <td> <?php echo $pessoaF ['sexo']; ?> </td>
                        <td> 
                            <form action="<?php $cadPessoaF->deletarPessoaFBD() ?>" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>"/>
                                <input type="submit" name="deletePessoaF" value="delete"/>
                            </form>
                            <form action="editarUsuario.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>"/>
                                <input type="submit" name="editar" value="editar"/>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>

            <?php
            // put your code here
            ?>
    </body>
</html>