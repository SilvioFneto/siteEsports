<?php

include("conexao.php");
$contato = selectIdContato($_POST["id"]);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosContato" action="conexao.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Nome: </td>
                    <td><input type="text" name="nome" value="<?=$contato["nome"]?>" size="20"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="<?=$contato["email"]?>" size="25"></td>
                </tr>
                <tr>
                    <td>Telefone: </td>
                    <td><input type="text" name="telefone" value="<?=$contato["telefone"]?>" size="20"></td>
                </tr>
                <tr>
                    <td>Nascimento: </td>
                    <td><input type="date" name="nascimento" value="<?=$contato["nascimento"]?>"></td>
                </tr>
                <tr>
                    <td>Sexo: </td>
                    <td><input type="text" name="sexo" value="<?=$contato["sexo"]?>"></td>
                </tr>
                <tr>
                    <td>Cpf: </td>
                    <td><input type="text" name="cpf" value="<?=$contato["cpf"]?>"></td>
                </tr>
                <tr>
                    <td>Senha: </td>
                    <td><input type="text" name="senha" value="<?=$contato["senha"]?>"></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="acao" value="atualizar">
                        <input type="hidden" name="id" value="<?=$contato["id"]?>">
                    </td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table> 
    </form>
</div>