<?php

include "../includes/conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$apelido = isset($_POST["apelido"]) ? $_POST["apelido"] : "Sem apelido";


$aut = "SELECT * FROM usuario WHERE nome = '$nome' OR email = '$email'";
$aut = $pdo->query($aut);
$res = $aut->rowCount();

if ($res > 1) {
    header("Location: ../registros.php?repcad=1");
} else {
    $update = "UPDATE usuario SET nome='$nome', email='$email', sexo='$sexo', apelido='$apelido' WHERE id = '$id'";
    $update = $pdo->query($update);
    $update->execute();
    header('Location: ../registros.php?upd=1');
}
