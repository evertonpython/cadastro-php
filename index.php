<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cadastro</title>
</head>
<body>
    <?php
        include("conexao.php");
        if(isset($_POST['btn'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sql = 'INSERT INTO dados
            (user, pass) VALUES
            (:user, :pass)';

            $cad_dados = $conexao->prepare($sql);
            $cad_dados->bindValue(":user", $user);
            $cad_dados->bindValue(":pass", $pass);
            
            if($cad_dados->execute()){
                header('location: login.php');
            }   
        }
    ?>
    <div class="wraper">
        <form method="POST">
            <h1>Cadastro</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuário" name="user" required><i class='bx bxs-user'></i>
            </div>

            <div class="input-box"> 
                <input type="password" placeholder="Senha" name="pass" required><i class='bx bxs-lock-alt'></i>
            </div>

            <input type="submit" class="btn" name="btn" value="Cadastrar">

            <div class="registrar">
                <p>Já tem uma conta? <a href="login.php">Entrar</a></p>
            </div>
        </form>
    </div>
</body>
</html>