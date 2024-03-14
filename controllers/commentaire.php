<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('../models/class/classCommentaire.php');
switch($_GET['action'])
{
    case 'add':
        // Création du commentaire
        if(!empty($_POST['commentaire']))
        {
            $commentaire = new Commentaire($_SESSION['commentaire']);
            // J'appelle la méthode
            $commentaire->creationCommentaire($_POST['commentaire']);
        }
    break;
    case 'edit':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_SESSION['idSelection']);
        if($commentaire)
        {
            $commentaire->editionCommentaire($_POST['$commentaire'],$_POST['$idSelection']);

        }
    break;
    case 'del':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_SESSION['idSelection']);
        if($commentaire)
        {
            $commentaire->suppressionCommentaire($_POST['$commentaire'],$_POST['$idSelection']);
        }    
    break;
    case 'maj':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_SESSION['idselection']);
        if($commentaire)
        {
            $commentaire->modificationCommentaire($_POST['$commentaire'],$_POST['$idSelection']);
        }    
    break;
}
?>