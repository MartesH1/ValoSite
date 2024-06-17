<?php

$mysql = new mysqli('localhost', 'root', '1111', 'valo_bd');
$characters_list = $mysql -> query("SELECT * FROM `agents` 
WHERE 1");
