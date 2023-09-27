<?php
    try {
        $bdd = new PDO('mysql:host=localhost:3310;dbname=bdsimplon','root',''); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){ 
       die('Erreur' .$e->getMessage());
    }

?>