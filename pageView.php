<?php

require_once("data.php");
require_once("render-Template.php");

$id = $_GET["id"];

$header_content = renderTemplate('templates/header.php', ['characters' => $characters_list]);

$page_content = renderTemplate('templates/'.$id, ['characters' => $characters_list]);

$layout_content = renderTemplate('templates/layout.php', ['content' => $page_content, 'header' => $header_content]);

echo $layout_content;