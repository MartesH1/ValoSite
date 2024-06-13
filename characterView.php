<?php

require_once("data.php");
require_once("render-Template.php");

$id = $_GET["id"];

$header_content = renderTemplate('templates/header.php', ['characters' => $characters_list]);

foreach($characters_list as $character){
    if($character['id'] == $id)
        $page_content = renderTemplate('templates/agent.php', ['character' => $character]);
}

$layout_content = renderTemplate('templates/layout.php', ['content' => $page_content, 'header' => $header_content]);

echo $layout_content;