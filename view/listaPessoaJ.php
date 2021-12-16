<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaJ.php';
$cadPessoaJ= new cPessoaJ();
$listPessoaJ=$cadPessoaJ->getPessoaJ();
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
                    <th>id</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th>CNPJ</th><th>Nome Fantasia</th><th>Funções</th><!--cria Cabeçalho-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPessoaJ as $pessoaJ): ?>
                    <tr>
                        <td><?php echo $pessoaJ ['idPessoa']; ?> </td>
                        <td> <?php echo $pessoaJ ['nome']; ?> </td>
                        <td> <?php echo $pessoaJ ['telefone']; ?> </td>
                        <td> <?php echo $pessoaJ ['email']; ?> </td>
                        <td> <?php echo $pessoaJ ['cnpj']; ?> </td>
                        <td> <?php echo $pessoaJ ['nomeFantasia']; ?> </td>
                        <td> 
                            <form action="../controller/deletePessoaJ.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>"/>
                                <input type="submit" name="deletePessoaJ" value="Deletar"/>
                            </form>
                            <form action="../view/editarPessoaJ.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>"/>
                                <input type="submit" name="UpdatePessoaJ" value="Editar"/>
                            </form>
                        </td>
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