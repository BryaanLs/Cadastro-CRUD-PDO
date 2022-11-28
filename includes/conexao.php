<?php
try {
    $pdo = new PDO("mysql:dbname=crudpdo;host=localhost", "root", "");
} catch (PDOException $e) {

    echo "Erro no banco de dados: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro generico: " . $e->getMessage();
}
