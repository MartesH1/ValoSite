<?php

$user_id = $_GET['user_id'];
$agent_id = $_GET['agent_id'];
    $mysql = new mysqli('localhost', 'root', '', 'valo_bd');
    $mysql -> query("DELETE FROM `favorite`
    WHERE `user_id` = '$user_id' AND `agent_id` = '$agent_id'");
    $mysql -> close();
    header('Location: ../../pageView.php?id=favorite.php');