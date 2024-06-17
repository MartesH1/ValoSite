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
    $result = null;
    if(isset($_COOKIE['user'])){
     $mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
     $user = $_COOKIE['user'];
     $result =$mysql -> query("SELECT `id` FROM `users` 
     WHERE `username` = '$user'")->fetch_assoc();
     $user_id = $result['id'];
     $character_id = $character['id'];

     $result = $mysql -> query("SELECT * FROM `favorite` 
     WHERE `user_id` = '$user_id' AND `agent_id` = '$character_id'") -> fetch_assoc();
     $mysql -> close();
     setcookie('agent_id', "$character_id", 0, "/");
    }
?>

<div class="agent">
    <div class="agent-desc">
        <img class="agent_img" src="<?=$character['img_path']?>" alt="">
        <div class="agent-class">
        <p class="agent-name"><?=$character['name'];?></p>
        <p class="agent-type"><?=$character['type'];?></p>
        </div>
        <p class="agent-opis"><?=$character['description'];?></p>
    </div>
    <div class="agent-abil">
        <div class="div-abil">
        <p class="abil-opis"><?=$character['ability_1'];?></p>
        <img class="ability" src="<?=$character['ability_1_img'];?>" alt="">
        </div>
        <div class="div-abil">
        <p class="abil-opis"><?=$character['ability_2'];?></p>
        <img class="ability" src="<?=$character['ability_2_img'];?>" alt="">
        </div>
        <div class="div-abil">
        <p class="abil-opis"><?=$character['ability_3'];?></p>
        <img class="ability" src="<?=$character['ability_3_img'];?>" alt="">
        </div>
        <div class="div-abil">
        <p class="abil-opis"><?=$character['ult'];?></p>
        <img class="ability" src="<?=$character['ult_img'];?>" alt="">
        </div>
        <a href="<?=$character['guide'];?>" class="guide" target="_blank">Гайды</a>
    </div>  
</div>    

    <div class="buttons">
        <?php if($result == null && isset($_COOKIE['user'])): ?>
            <a class="agent-but" href="./templates/PhP scripts/addtofavorite.php?character_id=<?=$character_id?>&status=add&user_id=<?=$user_id?>"><img class="fav" src="img/Group.png" alt=""></a>
        <?php elseif($result != null && isset($_COOKIE['user'])): ?>
            <a class="agent-but" href="./templates/PhP scripts/addtofavorite.php?character_id=<?=$character_id?>&status=del&user_id=<?=$user_id?>"><img class="fav" src="img/fav1.png" alt=""></a>
        <?php else: ?>
            <a class="agent-but" href="./pageView.php?id=auth.php"><img class="fav" src="img/Group.png" alt=""></a>
        <?php endif; ?>

        <?php if(isset($_COOKIE['user'])): ?>
            <?php if($_COOKIE['user'] == 'admin'): ?>
                <a class="agent-but" href="./templates/PhP scripts/deleteagent.php">Удалить агента</a>
            <?php endif; ?>
        <?php endif; ?>
        <a class="agent-but" href="./index.php#store">Назад</a>
    </div>  

<footer>
    <div class="link">
            <a href="https://vk.com/playvalorant" target="_blank"><img class="links" src="img/socials.png" alt=""></a>
            <a href="https://valorantesports.com/" target="_blank"><img class="links" src="img/esport.png" alt=""></a>
            <a href="https://playvalorant.com/ru-ru/news/" target="_blank"><img class="links" src="img/news.png" alt=""></a>
        </div> 
        <a href="index.php"><img class="logo2" src="img/logo2.png" alt=""></a>
</footer>        
