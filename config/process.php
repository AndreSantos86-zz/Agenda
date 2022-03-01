<?php
 session_start();
 include_once("connection.php");
 include_once("url.php");
 
 $data = $_POST;
 // modificação de dados
 if(!empty($data)){
    //criar contato
    if($data["type"] ==="create"){
       $name = $data["name"];
       $phone = $data["phone"];
       $observations = $data["observations"];

       $query = "INSERT INTO contacts (name, phone , observations) VALUES (:name, :phone, :observations)";

       $stmt = $conn->prepare($query);

       $stmt->bindParam(":name",$name);
       $stmt->bindParam(":phone",$phone);
       $stmt->bindParam(":observations",$observations);
       try{
          $stmt->execute();
          $_SESSION["msg"] = "Contato criado com sucesso!";

       }catch(PDOException $e){
          $error = $e->getMessage();
          echo "ERRO!: $error";
       }
    }
    //Voltar para Home
    header("Location:" . $BASE_URL . "../index.php");
    // seleção de dados
 }else{
   $id;

   if(!empty($_GET)){
      $id = $_GET["id"];
   }
   //retorna o dado de um contato
   if(!empty($id)){
       $query = "SELECT * FROM contacts WHERE id = :id";
       $stmt = $conn->prepare($query);
       $stmt->bindParam(":id",$id);
       $stmt->execute();
       $contact = $stmt->fetch();
   }else{
      $contacts = [];
  
      $query = "SELECT * FROM contacts";
     
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $contacts = $stmt->fetchAll();
   }
 }
 // Fechar conexão
 $conn = null;
?>