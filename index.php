<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <form class="form-signin" action="vendor/signin.php" method="post">
        <h2>Авторизация</h2>
        
        <input type="text" name="login" class="form-control" placeholder="Введите логин" required>
        <input type="password" name="password" class="form-control" placeholder="Введите пароль" required>
        <button class="btn btn-outline-warning" type="submit">Вход на сайт</button>
        <p>У вас нет аккаунта? - <a href="/registr.php">Зарегистрируйтесь</a>!</p>
        <?php
            if( $_SESSION['message']){
                echo ' <p class="msg"> ' . $_SESSION['message'] . '</p>';
            }
             unset ($_SESSION['message']); 
        ?>
        </form>
    </div>
</body>
</html>