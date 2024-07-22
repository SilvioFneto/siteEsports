<?php

// Verifica se o POST existe antes de inserir um novo contato
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirContato();
    }
    if ($_POST["acao"]=="atualizar"){
        atualizarContato();
    }
    if($_POST["acao"]=="excluir"){
        excluirContato();
    }
}


function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "usuario");
    if ($conexao->connect_error) {
        echo "deu ruim";
        die("Connection failed: " . $conexao->connect_error);
    }
    return $conexao;
}

function inserirContato() {
    $banco = abrirBanco();
    $sql = "INSERT INTO info(nome, email, telefone, nascimento, sexo, cpf, senha) 
    VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["telefone"]}','{$_POST["nascimento"]}','{$_POST["sexo"]}','{$_POST["cpf"]}','{$_POST["senha"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function atualizarContato() {
    $banco = abrirBanco();
    $sql = "UPDATE info SET nome='{$_POST["nome"]}',email='{$_POST["email"]}',telefone='{$_POST["telefone"]}',nascimento='{$_POST["nascimento"]}',sexo='{$_POST["sexo"]}',cpf='{$_POST["cpf"]}',senha='{$_POST["senha"]}' WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirContato() {
    $banco = abrirBanco();
    $sql = "DELETE FROM info WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllContato() {
    $banco = abrirBanco();
    $sql = "SELECT * FROM info ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    
    while($row = mysqli_fetch_array($resultado)) {
        $dados[] = $row;
    }
    return $dados;
}

function selectIdContato($id) {
    $banco = abrirBanco();
    $sql = "SELECT * FROM info WHERE id=".$id;
    $resultado = $banco->query($sql);
    $banco->close();

    $contato = mysqli_fetch_assoc($resultado);
    return $contato;
}

function voltarIndex(){
    header("Location:index.php");
}

?>