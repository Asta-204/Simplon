<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=id21357143_inscription','id21357143_kekeli','Kekeli.24'); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){ 
       die('Erreur' .$e->getMessage());
    }

?>
