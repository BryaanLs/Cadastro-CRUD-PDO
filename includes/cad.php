<?php
include "conexao.php";

if (isset($_GET["erro"])) {
    echo "<span class='erro'> Email e/ou nome já cadastrado(s)! </span>";
} elseif (isset($_GET["sucess"])) {
    echo "<span class='sucess'> Cadastro efetuado com sucesso! </span>";
}
