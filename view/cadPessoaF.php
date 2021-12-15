<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaFisica.php';
$cadPessoaF = new cPessoaFisica();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Pessoa Física</h1>
        <form action="<?php $cadPessoaF->inserirPessoaF() ?>"method="POST">
            <form method="POST">
                <input type='text' name='nome' placeholder="Nome Aqui..."/>
                <br><br>
                <input type='email' name='email' placeholder="E-Mail Aqui..."/>
                <br><br>
                <input type='text' name='telefone' placeholder="Telefone Aqui..."/>
                <br><br>
                <input type='text' name='endereco' placeholder="Endereço Aqui..."/>
                <br><br>
                <input type='text' name='cpf' placeholder="CPF Aqui..."/>
                <br><br>
                <input type="radio" value="F" name="sexo"/>Feminino
                <input type="radio" value="M" name="sexo"/>Masculino
                <br><br>
                <input type='submit' name='salvar' value='salvar'/>
                <input type='reset' name='limpar' value="limpar"/> 
                <input type="button" name="listar" value='listar' onclick="location.href='listaPessoaF.php'"/>
                </body>
                </html>
