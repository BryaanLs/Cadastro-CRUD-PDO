<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mensagens.css">
    <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Bem-Vindo(a)</h1>
        <a href="registros.php">Ver cadastros</a>
    </header>
    <?php include "../Cadastro/includes/cad.php"; ?>
    <main>
        <div class="container">
            <h1>Cadastre-se!</h1>

            <form action="../Cadastro/validacoes/dados_cad.php" method="post" id="cadastro">
                <label for="nome">Primeiro e segundo nome</label>
                <input type="text" name="nome" placeholder="*OBRIGATÓRIO" required maxlength="20">

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="*OBRIGATÓRIO" required>

                <label for="sexo">Sexo</label>
                <select name="sexo" required>
                    <option value="">Selecione seu gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>

                <label for="Apelido">Apelido</label>
                <input type="apelido" name="apelido" placeholder="*Opcional" maxlength="20">
            </form>
            <button type="submit" form="cadastro" id="btn_cad">Cadastrar</button>
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