<?php

  session_start();                    // iniciar a sessao

  include_once("connection.php");     // conctando
  include_once("url.php");            // chamando a base url

  $data = $_POST;

  //MODIFICAÇÕES NO BANCO
  if(!empty($data)){   // SE A DATA NAO ESTIVER VAZIA //  se data for diferente de vazio //

    print_r($data);  
    
    // CRIAR CONTATO
    if($data["type"] === "create"){

      $name        = $data["name"];
      $phone       = $data["phone"];
      $observation = $data["observation"];

      $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":observation", $observation);

      
    }



  // SELEÇÃO DE DADOS
  } else {

    $id;
  
    if(!empty($_GET)){
      $id = $_GET["id"];
    }
    
    // Retorna o dado de um contato
  
    if(!empty($id)){
  
      $query = "SELECT * FROM   CONTACTS where id = :id";
  
      $stmt = $conn->prepare($query);
  
      $stmt->bindParam(":id", $id);
  
      $stmt->execute();
  
      $contact = $stmt->fetch();
  
    }else{
  
      // Retorna todos os contatos
      $contacts = [];
    
      $query = "SELECT * FROM contacts";  // select
    
      $stmt = $conn->prepare($query);
    
      $stmt->execute();
    
      $contacts = $stmt->fetchAll();      // para receber todos os dados por meio da PDO
  
    }

  }  // FIM DO ELSE //



