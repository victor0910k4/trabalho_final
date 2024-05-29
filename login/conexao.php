<?php
  $servername = "localhost";
  $user = "root";
  $pass = "";
  $nomebd = "trabalho_final"; 

  try{
    $conn = new PDO("mysql:host=$servername;dbname=$nomebd", $user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $erro) {
    echo "não deu certo" . $erro->getMessage();
    die();
  }