<?php

function findUser(PDO $db, string $id)
{
  $query = $db->prepare("SELECT * FROM `user` AS A WHERE `id` = ?");
  $err = $query->execute([$id]);

  return $query->fetch(PDO::FETCH_ASSOC);
}

function findUserByPseudo(PDO $db, string $pseudo)
{
  $query = $db->prepare("SELECT * FROM `user` AS A WHERE `pseudo` = ?");
  $err = $query->execute([$pseudo]);

  return $query->fetch(PDO::FETCH_ASSOC);
}

function findRoleOfUser(PDO $db, string $id)
{
  $query = $db->prepare("SELECT * FROM `user` AS A WHERE `pseudo` = ?");
  $err = $query->execute([$pseudo]);

  return $query->fetch(PDO::FETCH_ASSOC);
}

function insertUser(PDO $db)
{

}

function updateUser(PDO $db, $data)
{
  $queryStem = "UPDATE `user` SET %s WHERE `id` = ?";
  $updates = [];
  foreach ($data as $key => $value) {
    updatedKeys[] = "`$key` = '$value'";
  }
  $updatedKeys = implode(', ', $updates);
  $query = $db->prepare(sprintf($queryStem, $updatedKeys));
  $err = $query->execute([]);
}

function deleteUser(PDO $db, string $id)
{
  $query = $db->prepare("DELETE FROM `user` WHERE `id` = ?");
  $err = $query->execute([$id]);

  return $err;
}
