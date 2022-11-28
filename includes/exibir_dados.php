<?php
include "conexao.php";

$sql = "SELECT * FROM usuario";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    for ($i = 0; $i < 5; $i++) {
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nome'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['sexo'] . '</td>';
            echo '<td>' . $row['apelido'] . '</td>';
            echo '<td><span class="btns"><button>Editar</button> <button>Excluir</button></span></td>';
            echo '</tr>';
            break;
        }
    }
}

/* if ($sql->rowCount() > 5) {
    break;
} */