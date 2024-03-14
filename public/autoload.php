<?php
$dir = '../models/';
$inc = scandir($dir);
if($inc){
    foreach($inc as $include)
    {
        if($include != '' && $include != '.' && $include != '..')
            require_once($dir.$include);
    }
}
$dir2 = '../controllers';
$inc2 = scandir($dir2);
if($inc2){
    foreach($inc2 as $include2)
    {
        if($include2 != '' && $include2 != '.' && $include2 != '..')
            require_once($dir2.$include2);
    }
}
?>