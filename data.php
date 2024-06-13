<?php

$mysql = new mysqli('localhost', 'root', '', 'valo_bd');
$characters_list = $mysql -> query("SELECT * FROM `agents` 
WHERE 1");