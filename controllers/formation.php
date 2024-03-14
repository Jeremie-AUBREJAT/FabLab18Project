<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classFormation.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        
        if(!empty($_POST['formation']) && !empty($_POST['photo']) && !empty($_POST['description']))
        {
            $formation = new Formation($_SESSION['formation'], $_SESSION['photo'], $_SESSION['description']);
            // J'appelle la méthode création
            $formation->creationFormation($_POST['formation'],$_POST['photo'],$_POST['description']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet formation avant de le modifier
        $formation= new Formation($_SESSION['idSelection']);
        if($formation)
        {
            $formation->editionFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }
    break;
    case 'del':
        // Je vais instancier l'objet formation avant de le modifier
        $formation = new Formation($_SESSION['idSelection']);
        if($formation)
        {
            $formation->suppressionFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet formation avant de le modifier
        $formation = new Formation($_SESSION['idselection']);
        if($formation)
        {
            $formation->modificationFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
}
?>