<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=login','root','');

    if(isset($_POST['action'])){
        $username = @$_POST['username'];
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        $sql = $pdo->prepare("INSERT INTO `accounts` VALUES (null, ?, ?, ?)");

        $sql->execute(array($username, $email, $password));
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a1331177b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registrar</title>
</head>
<body>
    <div class="container d-flex justify-content-center text-center">
        <div class="content">
            <h1>Registrar</h1>
            <form method="post">
                <div class="inputs">
                    <div class="username">
                        <input type="text" placeholder="Nome de Utilizador" name="username" required>
                        <i class="position-absolute fas fa-user"></i>
                    </div>
                    <div class="email">
                        <input type="text" placeholder="Email" name="email" required>
                        <i class="position-absolute fas fa-envelope"></i>
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Palavra Passe" name="password" required>
                        <i class="position-absolute fas fa-lock"></i>
                    </div>
                </div>
                <input type="submit" name="action" value="Enviar">
                <p>Já tens conta? <a href="login.html">Entrar</a></p>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>