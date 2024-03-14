<?php
// Notre fichier route qui va gérer les affichages
// On va vérifier en POST ou GET
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_GET['route']))
        $action = $_GET['route'];
    else
        $action = null;
    switch($action)
    {
        case 'contact':
            require('../views/front/contact.php');
        break;
        case 'galerie':
            require('../views/front/galerie.php');
        break;
        case 'mentions':
            require('../views/front/mentions-legales.php');
        break;
        case 'service':
            require('../views/front/service.php');
        break;
        default:
            require('../views/front/index.php');
        break;
    }    
}
?>