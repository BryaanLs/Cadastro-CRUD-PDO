<?php
include "conexao.php";

if (isset($_GET["erro"])) {
    echo "<span class='erro'> Email e/ou nome já cadastrado(s)! </span>";
} elseif (isset($_GET["sucess"])) {
    echo "<span class='sucess'> Cadastro efetuado com sucesso! </span>";
} elseif (isset($_GET["more"])) {
    echo "<span class='sucess'> Cadastro efetuado com sucesso! </span>";
} elseif (isset($_GET["upd"])) {
    echo "<span class='sucess'> Dados atualizados com sucesso! </span>";
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = "SELECT * FROM usuario WHERE id = '$id'";
    $usuario = $pdo->query($usuario);
    $res = $usuario->fetch(PDO::FETCH_ASSOC);
    $nome = $res['nome'];
    $email = $res['email'];
    $apelido = $res['apelido'];
} elseif (isset($_GET["repcad"])) {
    echo "<span class='erro'> Email e/ou nome já cadastrado(s)! </span>";
} elseif (isset($_GET['del'])) {
    echo "<span class='sucess'> Dados excluidos com sucesso! </span>";
}
