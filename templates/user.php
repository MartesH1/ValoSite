<div class="user">
    <a class="user_a" href="./index.php">Главная</a>
    <?php
        if($_COOKIE['user'] == 'admin'):
    ?>
        <a class="user_a" href="./pageView.php?id=user-list.php">Список пользователей</a>
    <?php
        endif;
    ?>
    <a class="user_a" href="./templates/PhP scripts/exit.php">Выйти</a>
</div>

<footer class="privyaz">
    <div class="link">
            <a href="https://vk.com/playvalorant" target="_blank"><img class="links" src="img/socials.png" alt=""></a>
            <a href="https://valorantesports.com/" target="_blank"><img class="links" src="img/esport.png" alt=""></a>
            <a href="https://playvalorant.com/ru-ru/news/" target="_blank"><img class="links" src="img/news.png" alt=""></a>
        </div> 
        <a href="index.php"><img class="logo2" src="img/logo2.png" alt=""></a>
</footer>  