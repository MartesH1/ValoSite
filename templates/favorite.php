<?php
    $mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
    $user = $_COOKIE['user'];
    $result = $mysql -> query("SELECT `id` FROM `users` 
    WHERE `username` = '$user'")->fetch_assoc();
    $user_id = $result['id'];

    $results = $mysql -> query("SELECT * FROM `favorite` 
    WHERE `user_id` = '$user_id'");
    $mysql -> close();
    
?>

<div class="favorite">
    <?php if($results != NULL):?>
        <?php foreach($results as $result):?>
            <?=renderTemplate('templates/favoriteagent.php', ['character' => $result]);?>       
        <?php endforeach; ?>
    <?php endif;?>
</div>

<footer class="privyaz">
    <div class="link">
            <a href="https://vk.com/playvalorant" target="_blank"><img class="links" src="img/socials.png" alt=""></a>
            <a href="https://valorantesports.com/" target="_blank"><img class="links" src="img/esport.png" alt=""></a>
            <a href="https://playvalorant.com/ru-ru/news/" target="_blank"><img class="links" src="img/news.png" alt=""></a>
        </div> 
        <a href="index.php"><img class="logo2" src="img/logo2.png" alt=""></a>
</footer>  
