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
    <!--профиль-->
    
        <form >
            <img src="<?= $_SESSION['user']['avatar']?>" width="200" style="text-allign: center;" alt="">
            <h2 style = "margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
            <a href="#"> <?= $_SESSION['user']['email']?> </a>
            <a href="vendor/logout.php" class="logout"> Выход </a>
        </form>
    </div>
</body>
</html>