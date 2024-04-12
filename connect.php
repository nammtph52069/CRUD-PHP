<?php
  $host = 'localhost';
  $dbname = 'phone-store';
  $username = 'root';
  $password = '';


  try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $error) {
    echo 'error connect'.$error -> getMessage();
  }
?>