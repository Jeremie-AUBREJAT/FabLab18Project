<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classRealisation.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        
        if(!empty($_POST['nom']) && !empty($_POST['photo']) && !empty($_POST['description']))
        {
            $realisation = new Outil($_SESSION['nom'], $_SESSION['photo'], $_SESSION['description']);
            // J'appelle la méthode création
            $realisation->creationRealisation($_POST['nom'],$_POST['photo'],$_POST['description']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet outil avant de le modifier
        $realisation= new realisation($_SESSION['idSelection']);
        if($realisation)
        {
            // J'appelle la méthode edition
            $realisation->editionRealisation($_POST['nom'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }
    break;
    case 'del':
        // Je vais instancier l'objet outil avant de le modifier
        $realisation = new Realisation($_SESSION['idSelection']);
        if($realisation)
        {
             // J'appelle la méthode suppression
            $outil->suppressionRealisation($_POST['nom'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet outil avant de le modifier
        $realisation = new Realisation($_SESSION['idselection']);
        if($realisation)
        {
          // J'appelle la méthode modifiction  
        $realisation->modificationRealisation($_POST['nom'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
}
?>