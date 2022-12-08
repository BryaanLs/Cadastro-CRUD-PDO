<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="css/mensagens.css">
    <link rel="shortcut icon" href="imagens\favicon.ico" type="image/x-icon">
    <title>Atualizar dados</title>
</head>

<body>
    <header>
        <h1>Atualizar dados</h1>
        <nav>
            <a href="registros.php">Ver cadastros</a>
            <a href="index.php">Novo cadastro</a>
        </nav>
    </header>
    <?php include "../Cadastro/includes/cad.php"; ?>
    <main>
        <div class="container">
            <form action="validacoes\update_date.php?id=<?php echo $_GET['id'];  ?>" method="post" id="update">
                <label for="nome">Primeiro</label>
                <input type="text" name="nome" placeholder="*OBRIGATÓRIO" required maxlength="15" value="<?php echo $nome; ?>">

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="*OBRIGATÓRIO" required value="<?php echo $email; ?>">

                <label for="sexo">Sexo</label>
                <select name="sexo" required>
                    <option value="">Selecione seu gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>

                <label for="Apelido">Apelido</label>
                <input type="apelido" name="apelido" placeholder="*Opcional" maxlength="15" value="<?php echo $apelido; ?>">
            </form>
            <button type="submit" form="update" id="btn_cad">Atualizar</button>
        </div>
    </main>
    <footer>
        <ul class="copy">
            <li>Bryan Soares</li>
            <li>&copy;Todos os direitos reservados</li>
        </ul>
        <ul class="links">
            <li><a href="https://www.instagram.com/bryaan_ls/" target="_blank">Instagram</a> </li>
            <li><a href="https://www.linkedin.com/in/bryaanls/" target="_blank">Linkedin</a> </li>
            <li><a href="https://github.com/BryaanLs/" target="_blank">GitHub</a> </li>
        </ul>
    </footer>

</body>

</html>