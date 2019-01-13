<?php

include "database.php";
include "articleRepository.php";
include "commentRepository.php";

$db = openDatabase('blog', 'root', 'troiswa');
$id = $_GET['id'];

$article = findArticlesByCategory($db, $id, $offset);

$template = "categoryArticles";
include PATH.'templates/base.phtml';
