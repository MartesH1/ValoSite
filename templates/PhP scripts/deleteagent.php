<?php
$id = $_COOKIE['agent_id'];
$mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
$mysql -> query("DELETE FROM `agents`
WHERE `id` = '$id'");
$mysql -> close();
header('Location: ../../index.php');
