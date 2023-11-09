<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="wraper">
        <form action="conexao.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuário" name="user" required><i class='bx bxs-user'></i>
            </div>

            <div class="input-box"> 
                <input type="password" placeholder="Senha" name="pass" required><i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="registrar">
                <p>Não tem uma conta? <a href="index.php">Cadastrar</a></p>
            </div>
        </form>
    </div>
</body>
</html>