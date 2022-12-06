<?php

/* Receber e validar dados para inserir no banco de dados */
include "../includes/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$sexo = $_POST["sexo"];
$apelido = isset($_POST["apelido"]) ? $_POST["apelido"] : "Sem apelido";


$sql = "SELECT * FROM usuario WHERE nome = '$nome' OR email = '$email'";
$sql = $pdo->query($sql);
$res = $sql->rowCount();

if ($res > 0) {
    header('Location: ../index.php?erro=1');
} else {
    $res = $pdo->prepare("INSERT INTO usuario (nome, email, sexo, apelido) VALUES (:n, :e, :s, :a)");
    $res->bindValue(":n", "$nome");
    $res->bindValue(":e", "$email");
    $res->bindValue(":s", "$sexo");
    $res->bindValue(":a", "$apelido");
    $res->execute();
    header('Location: ../index.php?sucess=1');
}
