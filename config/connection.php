<?php
 $host = "localhost";
 $dbname = "agenda";
 $user = "root";
 $pass = "";

 try{
     $conn = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);

     // ativar modo erros
     $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){
     // erro conexao
     $error = $e->getMessage();
     echo "ERRO: $error";

 }

?>