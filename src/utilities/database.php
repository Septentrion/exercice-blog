<?php

function openDatabase(string $database, string $user,string $password)
{
  return new PDO("mysql:dbname=$database;host=localhost", $root, $password);
}
