<?php 
    try{
          $pdo=new PDO("mysql:host=localhost;dbname=retraites","root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(Exception $e){
        echo ('Erreur de connexion : ' .$e->getMessage());
    }
