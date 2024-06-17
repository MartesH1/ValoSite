<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/style.css">
</head>
<body>
</body>
</html>

<?php
    $mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
    $count = $mysql -> query("SELECT COUNT(*)
    FROM `favorite`") -> fetch_assoc();
    $mysql -> close();
?>

<a href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
<div class = "header-part">
    <?php if(!isset($_COOKIE['user'])): ?>
        <a href="./pageView.php?id=auth.php"><img class="log" src="img/Group 40.png" alt=""></a>
        <a href="./pageView.php?id=registration.php"><img src="img/registration.png" alt="" class="reg"></a>
    <?php else: ?>
        <a href="./pageView.php?id=user.php"><img class="reg" src="img/Group 40.png" alt=""></a>
    <?php endif; ?>
    <?php if(isset($_COOKIE['user'])): ?>
        <a href="./pageView.php?id=favorite.php" class="fav"><img src="img/Group.png" alt=""></a>
    <?php else: ?>
        <a href="./pageView.php?id=auth.php"><img class="fav" src="img/Group.png" alt=""></a>
    <?php endif; ?>   
</div>
