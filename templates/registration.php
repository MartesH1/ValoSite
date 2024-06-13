<div class="form_auth_block">
        <div class="form_auth_block_content">
          <p class="form_auth_block_head_text">Регистрация</p>
          <form class="form_auth_style" action="./templates/PhP scripts/registration.php" method="post">
            <label>Введите имя пользователя</label>
            <input type="text" name="reg_username" placeholder="Введите имя пользователя" required>
            <label>Введите Ваш пароль</label>
            <input type="password" name="reg_pass" placeholder="Введите пароль" required>
            <button class="form_auth_button" type="submit" name="form_auth_submit">Зарегистрироваться</button>
          </form>
          <?php
              if(isset($_COOKIE['error'])):
          ?>
              <p><?=$_COOKIE['error']?></p>
          <?php
              endif;
          ?>
        </div>
      </div>

<footer class="privyaz">
    <div class="link">
            <a href="https://vk.com/playvalorant" target="_blank"><img class="links" src="img/socials.png" alt=""></a>
            <a href="https://valorantesports.com/" target="_blank"><img class="links" src="img/esport.png" alt=""></a>
            <a href="https://playvalorant.com/ru-ru/news/" target="_blank"><img class="links" src="img/news.png" alt=""></a>
        </div> 
        <a href="index.php"><img class="logo2" src="img/logo2.png" alt=""></a>
</footer>    