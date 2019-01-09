<?php

/**
 * [findArticle description]
 * @param  PDO    $db [description]
 * @param  string $id [description]
 * @return array      [description]
 */
function findArticle(PDO $db, string $id) : array
{
  $query = $db->prepare("SELECT * FROM `article` AS A WHERE `id` = ?");
  $err = $query->execute([$id]);

  return $query->fetch(PDO::FETCH_ASSOC);
}

/**
 * [findLastArticles description]
 * @param  PDO   $db    [description]
 * @param  int   $limit [description]
 * @return array        [description]
 */
function findLastArticles(PDO $db, int $limit) : array
{
  $query = $db->prepare("SELECT * FROM `article` AS A LIMIT ?");
  $err = $query->execute([$id]);

  return $query->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * [insertArticle description]
 * @param  PDO    $db   [description]
 * @param  array  $data [description]
 * @return [type]       [description]
 */
function insertArticle(PDO $db, array $data)
{
  $query = $db->prepare("INSERT INTO `article` () VALUES ()");
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
  $query = $db->prepare("UPDATE `article` SET WHERE `id` = ?");
  $err = $query->execute([]);

  return $err;
}

/**
 * [deleteArticle description]
 * @param  PDO    $db [description]
 * @param  int    $id [description]
 * @return [type]     [description]
 */
function deleteArticle(PDO $db, int $id)
{
  $query = $db->prepare("DELETE FROM `article` WHERE `id` = ?");
  $err = $query->execute([]);

  return $err;
}
