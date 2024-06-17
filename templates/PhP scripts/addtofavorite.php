<?php
$mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
$character_id = $_GET["character_id"];
$user_id = $_GET["user_id"];
$status = $_GET["status"];

if($status == "add"){
    $mysql -> query("INSERT INTO `favorite` (`user_id`, `agent_id`)
    VALUES ('$user_id', '$character_id')");
    $mysql -> close();
    header('Location: ../../pageView.php?id=favorite.php');
}
else{
    $mysql -> query("DELETE FROM `favorite`
    WHERE `user_id` = '$user_id' AND `agent_id` = '$character_id'");
    $mysql -> close();
    header('Location: ../../pageView.php?id=favorite.php');
}
