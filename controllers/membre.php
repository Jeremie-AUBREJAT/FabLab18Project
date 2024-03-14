<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classMembre.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']))
        {
            $Membre = new Membre($_SESSION['nom'], $_SESSION['prenom'], $_SESSION['email']);
            // J'appelle la méthode création
            $Membre->creationMembre($_POST['nom'],$_POST['prenom'],$_POST['email']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_SESSION['idSelection']);
        if($membre)
        {
            $membre->editionMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);

        }
    break;
    case 'del':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_SESSION['idSelection']);
        if($membre)
        {
            $membre->suppressionMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_SESSION['idselection']);
        if($membre)
        {
            $membre->modificationMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);
        }    
    break;
}
?>