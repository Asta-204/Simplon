<?php
     
    include_once 'config.php';

if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['numero'])){

     //nettoyage des donnees
     $nom = htmlspecialchars($_POST['nom']);
     $prenom = htmlspecialchars($_POST['prenom']);
     $email = htmlspecialchars($_POST['email']);
     $numero = htmlspecialchars($_POST['numero']);

     //preparation de la requette d'insertion
     $check = $bdd->prepare('SELECT nom,prenom,email,numero FROM inscription WHERE nom=?');

     //Execution de la requette
     $check->execute(array($nom));

     //Permet de recuperer les resources
     $data = $check->fetch(); 
     $row = $check->rowCount();

    if ($row == 0){
        if(strlen($nom) <=100){
            if(strlen($prenom) <=100){
                if(strlen($email) <=100){
                    if(strlen($numero) <=100){
                          $insert = $bdd->prepare('INSERT INTO inscription (nom,prenom,email,numero) VALUES(:nom, :prenom, :email, :numero)');
                          $insert->execute(array(
                               'nom'=> $nom,
                               'prenom'=> $prenom,
                               'email'=> $email,
                               'numero'=> $numero
                         ));
                         header('Location: index.php?reg_err=success');
                    }else header('Location: inscription.php?reg_err=numero_length');           
                }else header('Location: inscription.php?reg_err=email_length');
            }else header('Location: inscription.php?reg_err=prenom_length');
        }else header('Location: inscription.php?reg_err=nom_length');
    }else header('Location: index.php?reg_err=already');
}
?>

