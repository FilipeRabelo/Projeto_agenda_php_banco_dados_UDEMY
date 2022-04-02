<?php

  session_start();                    // iniciar a sessao

  include_once("connection.php");     // conctando
  include_once("url.php");            // chamando a base url

  $query = "SELECT * FROM contacts";  // select

  $stmt = $conn->prepare($query);

  $stmt->execute();

  $contacts = $stmt->fetchAll();      // para receber todos os dados por meio da PDO