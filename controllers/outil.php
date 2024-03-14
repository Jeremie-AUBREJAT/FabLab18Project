<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classOutil.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        
        if(!empty($_POST['outil']) && !empty($_POST['photo']) && !empty($_POST['description']))
        {
            $outil = new Outil($_SESSION['outil'], $_SESSION['photo'], $_SESSION['description']);
            // J'appelle la méthode création
            $outil->creationOutil($_POST['outil'],$_POST['photo'],$_POST['description']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet outil avant de le modifier
        $outil= new Outil($_SESSION['idSelection']);
        if($outil)
        {
            // J'appelle la méthode edition
            $outil->editionOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }
    break;
    case 'del':
        // Je vais instancier l'objet outil avant de le modifier
        $outil = new Outil($_SESSION['idSelection']);
        if($outil)
        {
             // J'appelle la méthode suppression
            $outil->suppressionOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet outil avant de le modifier
        $outil = new Outil($_SESSION['idselection']);
        if($outil)
        {
          // J'appelle la méthode modifiction  
            $Outil->modificationOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
}
?>