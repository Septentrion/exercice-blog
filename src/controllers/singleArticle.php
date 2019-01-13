<?php

include "database.php";
include "articleRepository.php";
include "commentRepository.php";

$db = openDatabase('blog', 'root', 'troiswa');
$id = $_GET['id'];

$article = findArticle($db, $id);
$comments = findCommentsByArticle($db, $id);

$template = "singleArticle";
include PATH.'templates/base.phtml';
