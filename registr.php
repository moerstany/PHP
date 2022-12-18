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
        <form class="form-signin" action="/vendor/signup.php" method="post" enctype="multipart/form-data">
        <h2>Регистрация</h2>
        <input type="text" name="fool_name" class="form-control" placeholder="Введите ФИО" required>
        <input type="text" name="login" class="form-control" placeholder="Введите логин" required>
        <input type="email" name="email" class="form-control" placeholder="Введите Email" required>
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <input type="password" name="password" class="form-control" placeholder="Введите пароль" required>
        <input type="password_confirm" name="password" class="form-control" placeholder="Подтвердите пароль" required>
        <button class="btn btn-outline-warning" type="submit">Регистрация</button>
        <p>Вы уже авторизованы? - <a href="/index.php">Вход на сайт</a>!</p>
        
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