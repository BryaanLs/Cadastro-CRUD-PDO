<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registros.css">
    <link rel="stylesheet" href="../validacoes/registros.php">
    <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon">
    <title>Cadastros</title>
</head>

<body>
    <header>
        <div class="topbar">
            <h1>Cadastros efetuados</h1>
            <a href="index.php">Início</a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Pessoas cadastradas </h1>
            <table>
                <tr>
                    <!--                     <td>ID</td> -->
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Sexo</td>
                    <td>Apelido</td>
                    <td>Ações</td>
                </tr>
                <?php include "../Cadastro/includes/exibir_dados.php" ?>
            </table>
        </div>
    </main>
    <footer>
        <ul class="copy">
            <li>Bryan Soares</li>
            <li>&copy;Todos os direitos reservados</li>
        </ul>
        <ul class="links">
            <li><a href="#">Instagram</a> </li>
            <li><a href="#">Linkedin</a> </li>
            <li><a href="#">GitHub</a> </li>

        </ul>
    </footer>

</body>

</html>