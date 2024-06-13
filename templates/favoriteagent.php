<?php
    $mysql = new mysqli('localhost', 'root', '', 'valo_bd');
    $agent_id = $character['agent_id'];
    $user_id = $character['user_id'];
    $result = $mysql -> query("SELECT * FROM `agents` 
    WHERE `id` = '$agent_id'")->fetch_assoc();
?>

<div class="fav_agent">
    <img class="card_img" src="<?=$result['img_path']?>" alt="">
    <div class="fav_opis">
        <p><?=$result['name'];?></p>
        <p><?=$result['type'];?></p>
    </div>
    <a href="./templates/PhP scripts/deletefromfavorite.php?agent_id=<?=$agent_id?>&user_id=<?=$user_id?>"><img class="del" src="img/Group 230.png" alt=""></a>
</div>
