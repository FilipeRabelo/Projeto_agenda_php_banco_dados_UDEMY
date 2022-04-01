<?php

  // Arquivo unicamente para conexao // para isolar a conexao e dividir as responsabilidades

  //PDO
  $host   = "localhost";
  $dbname = "agenda";
  $user   = "root";
  $pass   = "";

  try {             //PARA EXIBIR ERRO CASO ALGO DE ERRADO

    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);  //conexão

    // Ativar o modo de erros

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    //erro na conexão
    $error = $e->getMessage();   //Definindo a variavel erro
    echo "Erro: $error";
  }