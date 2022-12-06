<?php
include "conexao.php";

$sql = "SELECT * FROM usuario";
$sql = $pdo->query($sql);
$res = array();
$res = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    for ($i = 0; $i < count($res); $i++) {
        echo "<tr>";
        foreach ($res[$i] as $k => $v) {
            if ($k != "id") {
                echo "<td>" . $v . "</td>";
            }
        }

?>
        <td id="btn_a">
            <span class="btn_edit">
                <a href="index.php?id=<?php echo $res[$i]["id"]; ?>">Editar</a>
            </span>
            <span class="btn_exc">
                <a href="registros.php?id=<?php echo $res[$i]["id"]; ?>">Excluir</a>
            </span>
        </td>
<?php
        echo "</tr>";
    }
}

if (isset($_GET['id'])) {
    $id = addslashes($_GET['id']);
    $exc = "DELETE FROM usuario WHERE id = '$id'";
    $exc = $pdo->query($exc);
    $exc->execute();
    header('Location: registros.php');
}
