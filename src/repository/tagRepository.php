<?php

/**
 * [insertTag description]
 * @return [type] [description]
 */
function insertTag(PDO $db)
{
  $query = $db->prepare("INSERT INTO `tag` () VALUES ()");
  $err = $query->execute([]);

  return $err;
}

/**
 * [updateArticle description]
 * @param  PDO    $db   [description]
 * @param  int    $id   [description]
 * @param  array  $data [description]
 * @return [type]       [description]
 */
function updateArticle(PDO $db, int $id, array $data)
{
  $query = $db->prepare("UPDATE `tag` SET WHERE `id` = ?");
  $err = $query->execute([$id]);

  return $err;
}
