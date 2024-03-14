<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classAdministrateur.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']))
        {
            $administrateur = new Administrateur($_SESSION['nom'], $_SESSION['prenom'], $_SESSION['password']);
            // J'appelle la méthode création
            $administrateur->creationAdministrateur($_POST['nom'],$_POST['prenom'],$_POST['password']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet administrateur avant de le modifier
        $administrateur = new Administrateur($_SESSION['idSelection']);
        if($administrateur)
        {
            $administrateur->editionAdministrateur($_POST['$nom'],$_POST['$prenom'],$_POST['password'],$_POST['$idSelection']);
        }
    break;
    case 'del':
        // Je vais instancier l'objet administrateur avant de le modifier
        $administrateur = new Administrateur($_SESSION['idSelection']);
        if($administrateur)
        {
            $administrateur->suppressionAdministrateur($_POST['$nom'],$_POST['$prenom'],$_POST['password'],$_POST['$idSelection']); 
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet administrateur avant de le modifier
        $administrateur = new Administrateur($_SESSION['idselection']);
        if($administrateur)
        {
            $administrateur->modificationAdministrateur($_POST['$nom'],$_POST['$prenom'],$_POST['password'],$_POST['$idSelection']);
        }    
    break;
}
?>